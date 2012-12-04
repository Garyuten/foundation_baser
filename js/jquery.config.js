// jQuery

$(window).load(function(){
	//スライドショー
	if( $('#featured').length ) {
		$('#featured').orbit();
	}

	//フォーム要素
	//$("#main form input, #main form select").foundationCustomForms();
	
	//リンクへのclass設定 (外部リンク、ファイルへのリンク
	var Location = location.href;
	var myDomain = location.host;
	
	if( $("#main a").length ){
		$("#main").find("a").each( function() {
			//サイト外リンクにclass'LinkBlank'設定
			//外部リンクか判別
			if( myDomain.indexOf(this.hostname) == -1 &&  
				this.hostname != "" )  
			{
				//画像を含んでいない場合(テキストのみの場合）
				//if( $(this).find("img").length == 0) {
				if( $(this).find("img").length == 0) {
					//違うサイトへのリンクの処理
					$(this).addClass("LinkExternal");	//Class名追加
				}
				$(this).attr("target","_blank");  //target = "_blank"
			}
		});
	}
	
	//ファイル拡張子別にclass設定
	$("#main a[href$='.xls'], #alpha-inner a[href$='.xlsx']").addClass("LinkXls");
	$("#main a[href$='.doc'], #alpha-inner a[href$='.docx']").addClass("LinkDoc");
	$("#main a[href$='.pdf']:not(:has(img))").addClass("LinkPdf").attr("target","_blank");
	//$("#alpha-inner a[href$='.zip']").addClass("icon-zip");
});
