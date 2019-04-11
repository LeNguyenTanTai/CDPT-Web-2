
            $(document).ready(function(e) {
            $('.click').click(function(e) {
            $('#main_img').attr('src', $(this).attr('src'));
                });
            });
   
            

var total = 554.00;
            function test(item){
                if(item.checked){
                   total+= parseInt(item.value);
                }else{
                   total-= parseInt(item.value);
                }
                //alert(total);
                document.getElementById('Totalcost').innerHTML = '$'+total+'.00';
                }




                       