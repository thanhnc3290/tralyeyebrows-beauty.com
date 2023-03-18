<?php 
    $name   = $_POST['input_name'];if(!$name){$name = 'N/a';}
    $phone  = $_POST['input_phone'];if(!$phone){$phone = 'N/a';}

    $form_google_driver_url = 'https://docs.google.com/forms/d/e/1MtYTQidh7o53zot2U5XPoTnmDTFQ4BBridfl27o7X6/formResponse';
    
        //tạo query để post vào driver -- mấy cái entry.{number} là name của input trong form
        $query_post_google_driver   = '';
        $query_post_google_driver  .= 'entry.1821017381='.$name;
        $query_post_google_driver  .= '&entry.929188620='.$phone;
        // $query_post_google_driver  .= '&entry.582163649='.$email;
        // $query_post_google_driver  .= '&entry.1560448065='.$address;
        // $query_post_google_driver  .= '&entry.764703234='.$note;
        // $query_post_google_driver  .= '&entry.168170377='.$total_order;
        
        $url_to_send_request    = $form_google_driver_url.'?'.$query_post_google_driver;

        if(file_get_contents($url_to_send_request)){
            echo 'OK';
        }else{
            echo 'FALSE';
        }

?>