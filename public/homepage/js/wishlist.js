jQuery(document).ready(function () {
    jQuery('.wish-list').click(function () {
        var productid = jQuery(this).attr('productid');
        var customerid = jQuery('#id_customer').attr('id_customer');
        if(customerid==-1){
            console.log('chua dang nhap')
        }
        else{
            jQuery.ajax({
                url:'addwishlist',
                headers: {
                    'X-CSRF-TOKEN': '{!! csrf_token() !!}'
                },
                method : 'post',
                data:{
                    id_product : productid,
                    id_customer :customerid
                }
            }).done(function (data) {
                console.log(data)
            })
        }
    })
})
