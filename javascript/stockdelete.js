   function fun(id){
        
        if (confirm("you sure to delete this?")){

            delete_data(id);
            function delete_data(id){
                            jQuery.ajax({
                                url:'../../stock/php/sdelete.php',
                                  data: {
                                    'id' : id
                                },
                                dataType: 'json',
                                type:'post',
                                
                                success:function(result){
                                        jQuery('#ac_'+id).hide(500);
                                }


                            });
                        }
        }


    }