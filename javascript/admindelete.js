function fun(id){
        
        if (confirm("you sure to delete this?")){

            delete_data(id);
            function delete_data(id){
                            jQuery.ajax({
                                url:'../../stock/php/pdodelete.php',
                                  data: {
                                    'id' : id
                                },
                                dataType: 'json',
                                type:'post',
                                                                success:function(result){
                                        jQuery('#tr_'+id).hide(500);
                                }


                            });
                        }
        }


    }