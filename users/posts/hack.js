$ ( document ).ready( function () {

    var data = {
        submit: 'submit',
        articleid: 2,
        
    };

    console.log(data);

   $.ajax({
       type: 'POST',
       url: '/interviewblog/admin/posts/index.php',
       data: data,
       success: function (data) {
            if (data){
                console.log("done!!!");
                
            }
       }
   });
});


