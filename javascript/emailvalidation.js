
function checkemail() {

    var regex = /^[A-Za-z0-9,@,. ]+$/  
 
        
        var isValid = regex.test(document.getElementById("email").value);
        if (!isValid) {
            

            $( "#emailavailable").html("<span style='color:orange;'>avoid spical characters</span>");
        }else{
    

jQuery.ajax({
            url: "abcs.php",
            data: {
                'email' : $('#email').val()
            },
            dataType: 'json',
            type :"POST",
            success: function(data) {
                

                if(data['isvalid'] == false) {
                   
                    $( "#emailavailable").html("<span style='color:red;'>email not available</span>");

                    

                }
                else {
                    

                     $( "#emailavailable").html("<span style='color:green;'>email available</span>");
                }
            },
            error: function(data){}
  });
}

}
