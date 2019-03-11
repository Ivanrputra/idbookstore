<!DOCTYPE html>
<html id="bibi">


	<head>

		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=4.0, user-scalable=yes, shrink-to-fit=no" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>This E-Book is Published with BiB/i | EPUB Reader on your website.</title>
		<script src="{{ URL::asset('js/jquery3.3.1.min.js') }}"></script>
        <script>
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var x = window.location.href ;
            x = x.split('book=');
            x = x[1].split('/');
            $.ajax({
                url: "{{ url('/cek_book') }}",
                type: 'post',
                data: {id_buku: x[1]},
                dataType: 'json',
                success: function(data){
                    console.log(data);
                    if(JSON.parse(data.book.length) != 0){
                        // console.log(JSON.parse(data.book[0].id));
                        console.log('asdasd');
                    }
                    else{
                        window.location.href = "{{ url('/home') }}";
                    }
                },
                error: function( data ){
                    console.log('Error:', data);
                }
            });
        });
        </script>		
		<!-- # BiB/i ... Copyright (c) Satoru MATSUSHIMA - http://bibi.epub.link or https://github.com/satorumurmur/bibi (Licensed under the MIT license.) -->
		<!-- - The Elegant Icon Font ... Copyright (c) Elegant Themes, Inc. - http://www.elegantthemes.com/blog/resources/elegant-icon-font (Dual licensed under the GPL 2.0 and MIT license.) -->
		<!-- - Font Awesome ... Copyright (c) Dave Gandy - http://fontawesome.io (Licensed under SIL Open Font License (OFL) 1.1) -->
		<!-- - Material Icons ... Copyright (c) Material Design Authors / Google Inc. - https://material.io/icons/ (Licensed under the Apache License Version 2.0) -->
		<!-- - Native Promise Only ... Copyright (c) Kyle Simpson - https://github.com/getify/native-promise-only (Licensed under the MIT license.) -->
		<!-- - easing.js ... Copyright (c) Dan Rogers - https://github.com/danro/easing-js (Licensed under the MIT license.) -->
		<!-- - sML ... Copyright (c) Satoru MATSUSHIMA - https://github.com/satorumurmur/sML (Licensed under the MIT license.) -->
		
		<link rel="stylesheet" id="bibi-style" href="{{ URL::asset('bib/i/res/styles/bibi.css') }}" />
		{{-- <script id="bibi-script" src="{{ URL::asset('bibi-master/gulpfile.js') }}"></script> --}}
		<script id="bibi-script" src="{{ URL::asset('bib/i/res/scripts/bibi.js') }}"></script>
		{{-- <script id="bibi-script" src="{{ URL::asset('bib/i/extensions/unzipper/unzipper.js') }}"></script>
		
		<script id="bibi-script" src="{{ URL::asset('bib/i/extensions/analytics/analytics.js') }}"></script>
		<script id="bibi-script" src="{{ URL::asset('bib/i/extensions/fontsize/fontsize.js') }}"></script>
		<script id="bibi-script" src="{{ URL::asset('bib/i/extensions/share/share.js') }}"></script>
		<script id="bibi-script" src="{{ URL::asset('bib/i/extensions/epubcfi/epubcfi.js') }}"></script>
		<script id="bibi-script" src="{{ URL::asset('bib/i/extensions/overreflow/overreflow.js') }}"></script>
		<script id="bibi-script" src="{{ URL::asset('bib/i/extensions/jatex/jatex.js') }}"></script> --}}
		<script id="bibi-preset" src="{{ URL::asset('bib/i/presets/default.js') }}"></script>
	</head>


	{{-- <body data-bibi-book="{{ asset('storage/book/penulis/1/244-1-coba2.epub')}}"> --}}
	{{-- <body data-bibi-book="{{ URL::to('/') }}/storage/book/penulis/1/244-1-coba2.epub"> --}}
	{{-- <body data-bibi-book="storage/book/penulis/1/244-1-coba2.epub"> --}}
	<body data-bibi-book="">

		 「わたしのことは『ビビ』と呼んでください。『ビビ』はわたしの名前なんです」 —— エレクトラ・パブリケーヌ『ビビのみぎくるぶし』 
		 「まあ！　それじゃあ、やっぱり、『ビビ』はわたしの“名前”なのね？」　　　 —— ソフィア・パインアイランド『ビビさんたちのこと』 
		 「このあたりにビビさんという人がいると聞いたのですが、あなたですか？」と。 —— ビビ・ララルー『ポケットに眼鏡』 

		<div id="bibi-info">
			<h1>This E-Book is Published on the Web with BiB/i</h1>
			<ul>
				<li><a href="http://bibi.epub.link">BiB/i | EPUB Reader on your website. (Official Website / Japanese)</a></li>
				<li><a href="https://github.com/satorumurmur/bibi">BiB/i on GitHub (English)</a></li>
			</ul>
		</div>
	</body>
		

</html>