 

$(document).ready(function() { 

	//Initialize tooltip Bootstap
	$('[data-toggle="tooltip"]').tooltip()

	//Initialize Select2 Elements
    $('.select2').select2() 


    $('.jstxt-editor').wmwysiwyg();
 	//Replace the <textarea class="jstxt-editor"> with a bootstrap WYSIHTML5
    // $('.jstxt-editor').wysihtml5({
    // 	toolbar: {
	   //  	blockquote:false, 
		  //   image: false
	   //  }
    // }) 
});  




		 