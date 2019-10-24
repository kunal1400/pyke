<?php

// update_option("generate_single_block_post_count", 0);
function generatePostForHealthCare( $youtubeurl, $keyTakeAwayFirst = "" , $timestampFirst = "" , $textFirst = "" , $keyTakeAwaySecond = "" , $timestampSecond = "" , $textSecond = "" , $keyTakeAwayThird = "" , $timestampThird = "" , $textThird = "" , $keyTakeAwayFourth = "" , $timestampFourth = "" , $textFourth = "" , $keyTakeAwayFifth = "" , $timestampFifth = "" , $textFifth = "" , $keyTakeAwaySixth = "" , $timestampSixth = "" , $textSixth = "" , $keyTakeAwaySeventh = "" , $timestampSeventh = "" , $textSeventh = "", $keyTakeAwayEight = "" , $timestampEight = "" , $textEight = "", $keyTakeAwayNine = "" , $timestampNine = "" , $textNine = "") {
    
    $functionIndex = get_option("generate_single_block_post_count", 0);

    // Array of keytakeaways 
    $keyTakeAways = array();
    if($keyTakeAwayFirst || $textFirst) {
        $keyTakeAways[] = array('key' => $keyTakeAwayFirst, 'timestamp' => $timestampFirst, 'text' => $textFirst);  
    }
    if($keyTakeAwaySecond || $textSecond) {
        $keyTakeAways[] = array('key' => $keyTakeAwaySecond, 'timestamp' => $timestampSecond, 'text' => $textSecond);   
    }
    if($keyTakeAwayThird || $textThird) {
        $keyTakeAways[] = array('key' => $keyTakeAwayThird, 'timestamp' => $timestampThird, 'text' => $textThird);  
    }
    if($keyTakeAwayFourth || $textFourth) {
        $keyTakeAways[] = array('key' => $keyTakeAwayFourth, 'timestamp' => $timestampFourth, 'text' => $textFourth);   
    }
    if($keyTakeAwayFifth || $textFifth) {
        $keyTakeAways[] = array('key' => $keyTakeAwayFifth, 'timestamp' => $timestampFifth, 'text' => $textFifth);  
    }
    if($keyTakeAwaySixth || $textSixth) {
        $keyTakeAways[] = array('key' => $keyTakeAwaySixth, 'timestamp' => $timestampSixth, 'text' => $textSixth);  
    }
    if($keyTakeAwaySeventh || $textSeventh) {
        $keyTakeAways[] = array('key' => $keyTakeAwaySeventh, 'timestamp' => $timestampSeventh, 'text' => $textSeventh);    
    }
    if($keyTakeAwayEight || $textEight) {
        $keyTakeAways[] = array('key' => $keyTakeAwayEight, 'timestamp' => $timestampEight, 'text' => $textEight);    
    }
    if($keyTakeAwayNine || $textNine) {
        $keyTakeAways[] = array('key' => $keyTakeAwayNine, 'timestamp' => $timestampNine, 'text' => $textNine);    
    }

    $return = generateLayout( $functionIndex, $keyTakeAways, $youtubeurl );
    $functionIndex++;
    if( $functionIndex < 34 ) {
        update_option("generate_single_block_post_count", $functionIndex);
    }
    else {
        update_option("generate_single_block_post_count", 0);
    }
    return  $return;
}

function categoryNameFromString( $string ) {
    // $return = $string;
    if( $string == "health" ) {
        $return = "gezondheid";
    }
    else if( $string == "love" ) {
        $return = "liefde";
    } 
    else if( $string == "wealth" ) {
        $return = "welvaart";
    }   
    else if( $string == "general" ) {
        $return = "algemeen";
    } 
    else if( $string == "nutrition" ) {
        $return = "voeding";
    }
    else if( $string == "body_care" ) {
        $return = "lichaamsverzorging";
    }
    else if( $string == "body care" ) {
        $return = "lichaamsverzorging";
    }   
    else if( $string == "physical" ) {
        $return = "fysiek";
    }
    else if( $string == "mental" ) {
        $return = "geestelijk";
    }   
    else if( $string == "emotion" ) {
        $return = "emoties";
    }
    else if( $string == "social" ) {
        $return = "sociaal";
    }
    else if( $string == "relation" ) {
        $return = "relatie";
    }
    else if( $string == "parenting" ) {
        $return = "ouderschap";
    }
    else if( $string == "spiritual" ) {
        $return = "spiritueel";
    }   
    else if( $string == "work" ) {
        $return = "werk";
    } 
    else if( $string == "finance" ) {
        $return = "financiën";
    } 
    else if( $string == "living" ) {
        $return = "leven";
    }   
    else if( $string == "contribution" ) {
        $return = "bijdrage";
    } 
    else if( $string == "body" ) {
        $return = "lichaam";
    }
    else if( $string == "aging" ) {
        $return = "ouderdom";
    }   
    else if( $string == "diseases" ) {
        $return = "ziektes";
    } 
    else if( $string == "work_out" ) {
        $return = "work out";
    }   
    else if( $string == "strength" ) {
        $return = "kracht";
    } 
    else if( $string == "psychology" ) {
        $return = "psychologie";
    }   
    else if( $string == "neuroscience" ) {
        $return = "neurowetenschap";
    } 
    else if( $string == "food" ) {
        $return = "voedsel";
    }   
    else if( $string == "drinks" ) {
        $return = "drinken";
    } 
    else if( $string == "nutrients" ) {
        $return = "voedingsstoffen";
    }   
    else if( $string == "kids" ) {
        $return = "kind";
    }   
    else if( $string == "mouth" ) {
        $return = "mond";
    }
    else if( $string == "skin" ) {
        $return = "huid";
    }
    else if( $string == "hair" ) {
        $return = "haar";
    }
    else if( $string == "brain" ) {
        $return = "hersenen";
    }       
    else if( $string == "career" ) {
        $return = "carrière";
    }
    else if( $string == "entrepreneur" ) {
        $return = "ondernemer";
    }
    else if( $string == "books" ) {
        $return = "boeken";
    }
    else if( $string == "buying" ) {
        $return = "aanschaffen";
    }
    else if( $string == "selling" ) {
        $return = "verkopen";
    }
    else if( $string == "house" ) {
        $return = "huis";
    }
    else if( $string == "relaxing" ) {
        $return = "ontspannen";
    }
    else if( $string == "travel" ) {
        $return = "reizen";
    }
    else if( $string == "community" ) {
        $return = "maatschappij";
    }
    else if( $string == "humanity" ) {
        $return = "mensheid";
    }
    else if( $string == "philanthropy" ) {
        $return = "filantropie";
    }
    else {
        $return = "$string";
    }
    return $return;
}

function generatePath( $main, $category_1, $category_2, $category_3, $sub_1, $sub_1a, $sub_1b, $sub_1c, $sub_1d, $sub_1e, $sub_1f, $sub_1g, $sub_1h, $sub_1i ) {    
    $return = "";
    if( $main ) {
        $return = categoryNameFromString($main);
    }
    if( $category_1 ) {
        $return .= '>'.categoryNameFromString($category_1);
    }
    if( $category_2 ) {
        $return .= '>'.categoryNameFromString($category_2);
    }
    if( $category_3 ) {
        $return .= '>'.categoryNameFromString($category_3);
    }
    if( $sub_1 ) {
        $return .= '>'.categoryNameFromString($sub_1);
    }   
    if( $sub_1a ) {
        $return .= '>'.categoryNameFromString($sub_1a);
    }
    if( $sub_1b ) {
        $return .= '>'.categoryNameFromString($sub_1b);
    }   
    if( $sub_1c ) {
        $return .= '>'.categoryNameFromString($sub_1c);
    }   
    if( $sub_1d ) {
        $return .= '>'.categoryNameFromString($sub_1d);
    }
    if( $sub_1e ) {
        $return .= '>'.categoryNameFromString($sub_1e);
    }   
    if( $sub_1f ) {
        $return .= '>'.categoryNameFromString($sub_1f);
    }
    if( $sub_1g ) {
        $return .= '>'.categoryNameFromString($sub_1g);
    }       
    if( $sub_1h ) {
        $return .= '>'.categoryNameFromString($sub_1h);
    }
    if( $sub_1i ) {
        $return .= '>'.categoryNameFromString($sub_1i);
    }       
    
    return $return;
}

function generateLayout( $id, $keyTakeAways, $youtubeurl ) {
    $thanksText = 'Thanks for using our key takeaways to learn something about how to Artificially improve your life the easy way. For the best use of our platform we refer to the ';
    $linkWithOutSpan = '<a href="/?page_id=742">About us - page</a>';
    $linkWithSpan = '<span style="color: #a5d666;"><a style="color: #a5d666;" href="/?page_id=742">About - page</a></span> ';
    $rememberTxt = 'Please remember. Nothing in this Post can be used as a substitute for e.g. getting objective and professional medical advise from a medical doctor in case you experience any medical discomfort. Also remember that even by watching the Youtube videos on our platform you contribute to the Youtube revenues that the original creators will receive. By no means do we make any copyright infringements and we have the utmost respect for the original video creators. If you have any suggestions please contact us.';
    $mpcImageId = '6414';
    $mpcNextImageId = '6151';
    $thanksFontSize = 'font_size="9"';    

    // 0,1,2,3,4
    if($id < 5){
        // Template for ID: 6653, 6668, 6673, 6678, 6457
        $colors = array( '#b8d58f', '#cce0f2', '#cdcbce', '#cea791', '#f6c6cc' );
        $color  = $colors[$id];

        $return = '[vc_row enable_top_separator="true" css=".vc_custom_1563696768341{margin-top: -120px !important;}"][vc_column][vc_column_text css=".vc_custom_1563797698785{margin-bottom: 0px !important;}"]<a name="jumpvideo"></a>[/vc_column_text][/vc_column][/vc_row][vc_row enable_top_separator="true" top_separator_style="cloud" top_separator_color="'.$color.'" css=".vc_custom_1563696831799{margin-top: 40px !important;}"][vc_column][vc_video link="'.$youtubeurl.'"][/vc_column][/vc_row][vc_row bg_type="image" enable_first_overlay="true" first_overlay_opacity="25"][vc_column width="1/4" offset="vc_hidden-sm vc_hidden-xs"][mpc_image image="'.$mpcImageId.'" image_opacity="100" image_border_divider="true" image_inner_border_gap="0" effect="none" image_hover_opacity="100" mpc_ribbon__preset="mpc_preset_9" mpc_ribbon__style="corner" mpc_ribbon__alignment="bottom-right" mpc_ribbon__font_preset="mpc_preset_35" mpc_ribbon__font_color="#f7f7f7" mpc_ribbon__font_size="20" mpc_ribbon__font_line_height="1.7" mpc_ribbon__font_transform="uppercase" mpc_ribbon__text="Key takeaway" mpc_ribbon__background_color="'.$color.'" mpc_ribbon__border_divider="true" mpc_ribbon__border_css="border-top:3px;border-right:3px;border-bottom:3px;border-left:3px;border-color:#f7f7f7;border-style:dashed;"][/vc_column][vc_column width="3/4"][mpc_textblock preset="preset_0" content_width="100" font_preset="mpc_preset_65" font_color="'.$color.'" font_size="35" font_line_height="1" font_align="left" margin_divider="true" margin_css="margin-bottom:10px;" mpc_tooltip__disable="true" mpc_tooltip__preset="mpc_preset_29"]<h1><span style="color: #402312;">key</span> takeaways</h1>[/mpc_textblock]';
        foreach ($keyTakeAways as $i => $keyTakeAway) {
            $return .= '[mpc_divider preset="preset_0" content_type="title" content_position="0" content_border_divider="true" content_border_css="border-top:0px;border-right:0px;border-bottom:0px;border-left:10px;border-color:#402312;border-style:solid;border-radius:0px;" content_padding_divider="true" content_padding_css="padding-left:15px;" font_preset="mpc_preset_20" font_color="#515151" font_size="18" font_line_height="1.2" font_transform="uppercase" font_align="left" title="'.$keyTakeAway['key'].'" icon="eti eti_lock-open_alt" icon_color="#fea580" icon_size="24" lines_color="'.$color.'" lines_weight="20" padding_divider="true" padding_css="padding-bottom:10px;" margin_divider="true" margin_css="margin-top:20px;"][mpc_textblock content_width="100" margin_divider="true" margin_css="margin-top:10px;"]'.$keyTakeAway['text'].'[/mpc_textblock][vc_row_inner css=".vc_custom_1563628797452{margin-bottom: -15px !important;}"][vc_column_inner width="1/2" css=".vc_custom_1564669235457{margin-top: 10px !important;margin-bottom: 10px !important;}"][vc_column_text css=".vc_custom_1563798468125{margin-top: 10px !important;margin-bottom: 10px !important;}"]<h4>[linktimestamp link=#jumpvideo time='.$keyTakeAway['timestamp'].' color=#402312 icon=fa-youtube-play]Play the rest of part[/linktimestamp]</h4>[/vc_column_text][/vc_column_inner][/vc_row_inner]';
        }
        $return .= '[vc_empty_space css=".vc_custom_1563626717240{margin-top: 10px !important;background-color: '.$color.' !important;}"][/vc_column][/vc_row][vc_row enable_bottom_separator="true" bottom_separator_style="cloud" bottom_separator_color="'.$color.'"][vc_column width="1/4" css=".vc_custom_1563709537807{margin-bottom: 20px !important;}"][mpc_image image="'.$mpcNextImageId.'" padding_divider="true" margin_divider="true" image_size="100x100" image_opacity="100" image_border_css="border-radius:75px;" image_inner_border_gap="0" effect="none" image_hover_opacity="100"][/vc_column][vc_column width="3/4"][mpc_textblock content_width="100" font_preset="preset_2" '.$thanksFontSize.']'.$thanksText.' '.$linkWithSpan.' . '.$rememberTxt.'[/mpc_textblock][/vc_column][/vc_row]';
    }

    // 5,6,7,8,9,10,11,12,13
    else if($id > 4 &&  $id < 14){
        // Template for ID: 6489, 6578, 6586, 6590, 6593, 6596, 6598, 6600, 6602
        $a = array( array(), array(), array(), array(), array(),
            array('testimonialpreset' => 'mpc_preset_18', 
                'css' => 'vc_custom_1563800747832', 
                'background_gradient' => '#84ccff||#9284ff||28;100||178||linear', 
                'url' => '|||', 
                'url_font_color' => '#f7f7f7', 
                'thumbnail_size' => '200x200', 
                'thumbnail_border_css' => 'border-width:0px;border-color:#ffffff;border-style:solid;border-radius:100px;'
            ),
            array('testimonialpreset' => 'mpc_preset_22', 
                'css' => 'vc_custom_1563709537807', 
                'background_gradient' => '#ff8e92||#b55eb3||22;100||207||linear', 
                'url' => '|||', 
                'url_font_color' => '#f3f3f3', 
                'thumbnail_size' => '100x100', 
                'thumbnail_border_css' => 'border-width:5px;border-color:#ffffff;border-style:solid;border-radius:100px;'
            ),
            array('testimonialpreset' => 'mpc_preset_21', 
                'css' => 'vc_custom_1563709537807', 
                'background_gradient' => '#d65e58||#f39b60||0;100||180||linear', 
                'url' => '|||', 
                'url_font_color' => '#f3f3f3', 
                'thumbnail_size' => '100x100', 
                'thumbnail_border_css' => 'border-width:5px;border-color:#ffffff;border-style:solid;border-radius:100px;'
            ),
            array('testimonialpreset' => 'mpc_preset_20', 
                'css' => 'vc_custom_1563709537807', 
                'background_gradient' => '#67b7a0||#f7e383||22;100||307||linear', 
                'url' => '|||', 
                'url_font_color' => '#f3f3f3', 
                'thumbnail_size' => '100x100', 
                'thumbnail_border_css' => 'border-width:5px;border-color:#ffffff;border-style:solid;border-radius:100px;'
            ),
            array('testimonialpreset' => 'mpc_preset_23', 
                'css' => 'vc_custom_1563709537807', 
                'background_gradient' => '#83bae3||#80e0d4||0;100||223||linear', 
                'url' => '|||', 
                'url_font_color' => '#f3f3f3', 
                'thumbnail_size' => '100x100', 
                'thumbnail_border_css' => 'border-width:5px;border-color:#ffffff;border-style:solid;border-radius:100px;'
            ),
            array('testimonialpreset' => 'mpc_preset_18', 
                'css' => 'vc_custom_1563800747832', 
                'background_gradient' => '#3f2415||#cdcbce||5;37||178||linear', 
                'url' => '|||', 
                'url_font_color' => '#f7f7f7', 
                'thumbnail_size' => '200x200', 
                'thumbnail_border_css' => 'border-width:0px;border-color:#ffffff;border-style:solid;border-radius:100px;'
            ),
            array('testimonialpreset' => 'mpc_preset_18', 
                'css' => 'vc_custom_1563800747832', 
                'background_gradient' => '#3f2415||#a8cfef||5;37||178||linear', 
                'url' => '|||', 
                'url_font_color' => '#f7f7f7', 
                'thumbnail_size' => '200x200', 
                'thumbnail_border_css' => 'border-width:0px;border-color:#ffffff;border-style:solid;border-radius:100px;'
            ),
            array('testimonialpreset' => 'mpc_preset_19', 
                'css' => 'vc_custom_1563800747832', 
                'background_gradient' => '#47b2ab||#a5e25a||19;100||131||linear', 
                'url' => '|||', 
                'url_font_color' => '#f3f3f3', 
                'thumbnail_size' => '200x200', 
                'thumbnail_border_css' => 'border-width:0px;border-color:#ffffff;border-style:solid;border-radius:5px;'
            ),
            array('testimonialpreset' => 'mpc_preset_19', 
                'css' => 'vc_custom_1563800747832', 
                'background_gradient' => '#47b2ab||#a5e25a||19;100||131||linear', 
                'url' => '|||', 
                'url_font_color' => '#f3f3f3', 
                'thumbnail_size' => '200x200', 
                'thumbnail_border_css' => 'border-width:0px;border-color:#ffffff;border-style:solid;border-radius:5px;'
            )
        );
        $d = $a[$id];
        $return = '[vc_row enable_top_separator="true" css=".vc_custom_1563696768341{margin-top: -120px !important;}"][vc_column][vc_column_text css=".vc_custom_1563696569710{margin-bottom: 0px !important;}"]<a name="jumpvideo"></a>[/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1563731120664{margin-top: 60px !important;margin-bottom: 0px !important;}"][vc_column][vc_video link="'.$youtubeurl.'"][/vc_column][/vc_row][vc_row css=".vc_custom_1563731109992{margin-top: 0px !important;}"]';
        foreach ($keyTakeAways as $i => $keyTakeAway) {            
            $return .= '[vc_column][mpc_testimonial preset="'.$d['testimonialpreset'].'" background_type="gradient" background_gradient="'.$d['background_gradient'].'" author_font_color="#ffffff" author_font_align="left" url_font_preset="mpc_preset_27" url_font_color="'.$d['url_font_color'].'" url_font_size="14" hover_url_color="#ffffff" url="'.$d['url'].'" testimonial_font_preset="mpc_preset_47" testimonial_font_color="#ffffff" testimonial_font_size="14" testimonial_font_align="left" thumbnail_size="'.$d['thumbnail_size'].'" thumbnail_border_css="'.$d['thumbnail_border_css'].'" thumbnail_padding_divider="true" thumbnail_padding_css="padding-left:0px;" border_css="border-radius:5px;" padding_css="padding:35px;"]<h2></h2><h3>KEY TAKEAWAYS</h3><h4>'.$keyTakeAway['key'].'</h4>'.$keyTakeAway['text'].'<h4 style="text-align: center;">[linktimestamp link=#jumpvideo time='.$keyTakeAway['timestamp'].' color=#ffffff icon=fa-youtube-play]Play the rest of part[/linktimestamp]</h4>[/mpc_testimonial][/vc_column]';
        }
        $return .= '[/vc_row][vc_row][vc_column width="1/4" css=".'.$d['css'].'{margin-bottom: 20px !important;}"][mpc_image image="'.$mpcNextImageId.'" padding_divider="true" margin_divider="true" image_size="100x100" image_opacity="100" image_border_css="border-radius:75px;" image_inner_border_gap="0" effect="none" image_hover_opacity="100"][/vc_column][vc_column width="3/4"][mpc_textblock content_width="100" font_preset="preset_2" '.$thanksFontSize.']'.$thanksText.' '.$linkWithSpan.' . '.$rememberTxt.'[/mpc_textblock][/vc_column][/vc_row]';
    }

    if( $id == 14 ){
        $return = '[vc_row enable_top_separator="true" css=".vc_custom_1563696768341{margin-top: -120px !important;}"][vc_column][vc_column_text css=".vc_custom_1563696569710{margin-bottom: 0px !important;}"]<a name="jumpvideo"></a>[/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1564669887174{margin-top: 40px !important;margin-bottom: 0px !important;}"][vc_column][vc_video link="'.$youtubeurl.'"][/vc_column][/vc_row][vc_row][vc_column][vc_row_inner][vc_column_inner width="1/4" offset="vc_hidden-sm vc_hidden-xs"][mpc_image image="'.$mpcImageId.'" margin_divider="true" margin_css="margin-bottom:30px;" image_opacity="100" image_inner_border_gap="0" effect="none" image_hover_opacity="100" mpc_ribbon__preset="mpc_preset_16" mpc_ribbon__style="fullwidth" mpc_ribbon__corners_color="#4a7c8e" mpc_ribbon__font_preset="mpc_preset_17" mpc_ribbon__font_color="#f7f7f7" mpc_ribbon__font_size="22" mpc_ribbon__font_line_height="1.7" mpc_ribbon__text="key takeaway" mpc_ribbon__background_type="gradient" mpc_ribbon__background_gradient="#402312||#f6c6cc||50;50||225||linear" mpc_ribbon__padding_divider="true" mpc_ribbon__padding_css="padding-top:15px;padding-bottom:15px;" mpc_ribbon__margin_divider="true" mpc_ribbon__margin_css="margin-top:180px;"][/vc_column_inner][vc_column_inner width="3/4"][mpc_textblock preset="preset_0" content_width="100" font_preset="mpc_preset_65" font_color="#f6c6cc" font_size="35" font_line_height="1" font_align="left" margin_divider="true" mpc_tooltip__disable="true" mpc_tooltip__preset="mpc_preset_29"]<h1><span style="color: #402312;">key</span> takeaways</h1>[/mpc_textblock][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]';
        foreach ($keyTakeAways as $i => $keyTakeAway) {
            // If even
            if( $i%2 == 0 ) {
                $return .= '[vc_row css=".vc_custom_1555865449496{margin-top: -25px !important;}"][vc_column][mpc_divider preset="mpc_preset_19" align="left" content_type="title" content_position="0" content_border_css="border-width:2px;border-color:#f6c6cc;border-style:solid;" content_padding_divider="true" content_padding_css="padding-top:5px;padding-right:15px;padding-bottom:5px;padding-left:15px;" font_color="#f6c6cc" font_size="16" font_line_height="1" font_transform="uppercase" font_align="left" title="'.$keyTakeAway['key'].'" icon="fa fa-anchor" icon_color="#b077b7" icon_size="30" lines_color="#f6c6cc" lines_weight="2" padding_divider="true"][vc_column_text css=".vc_custom_1563808217847{margin-top: 10px !important;}"]'.$keyTakeAway['text'].'[/vc_column_text][vc_column_text css=".vc_custom_1563799748773{margin-top: 10px !important;margin-bottom: 10px !important;}"]<h4>[linktimestamp link=#jumpvideo time='.$keyTakeAway['timestamp'].' color=#402312 icon=fa-youtube-play]Play the rest of part[/linktimestamp]</h4>[/vc_column_text][/vc_column][/vc_row]';
            }
            else {
                $return .= '[vc_row css=".vc_custom_1555865449496{margin-top: -25px !important;}"][vc_column][mpc_divider preset="mpc_preset_20" content_type="title" content_position="100" content_border_css="border-width:2px;border-color:#f6c6cc;border-style:solid;" content_padding_divider="true" content_padding_css="padding-top:5px;padding-right:15px;padding-bottom:5px;padding-left:15px;" font_preset="mpc_preset_1" font_color="#f6c6cc" font_size="16" font_line_height="1" font_transform="uppercase" font_align="center" title="'.$keyTakeAway['key'].'" icon="fa fa-paint-brush" icon_color="#76bdcc" icon_size="30" lines_color="#f6c6cc" lines_weight="2"][vc_column_text css=".vc_custom_1563808228065{margin-top: 10px !important;}"]'.$keyTakeAway['text'].'[/vc_column_text][vc_column_text css=".vc_custom_1563808175828{margin-top: 10px !important;margin-bottom: 10px !important;}"]<h4 style="text-align: right;">[linktimestamp link=#jumpvideo time='.$keyTakeAway['timestamp'].' color=#402312 icon=fa-youtube-play]Play the rest of part[/linktimestamp]</h4>[/vc_column_text][/vc_column][/vc_row]';
            }
        }
        $return .= '[vc_row][vc_column][mpc_divider preset="mpc_preset_29" content_type="icon" content_border_css="border-width:2px;border-color:#f6c6cc;border-style:solid;border-radius:60px;" content_padding_css="padding:15px;" font_preset="mpc_preset_1" font_color="#a3a3a3" font_size="16" font_line_height="1" font_transform="uppercase" font_align="left" title="ADDONS" icon="eti eti_heart" icon_color="#f6c6cc" icon_size="30" lines_color="#f6c6cc" lines_weight="2" padding_divider="true"][vc_row_inner css=".vc_custom_1563726369192{margin-top: 10px !important;}"][vc_column_inner width="1/4" css=".vc_custom_1563726492075{margin-bottom: 20px !important;}"][mpc_image image="'.$mpcNextImageId.'" padding_divider="true" margin_divider="true" image_size="100x100" image_opacity="100" image_border_css="border-radius:75px;" image_inner_border_gap="0" effect="none" image_hover_opacity="100"][/vc_column_inner][vc_column_inner width="3/4"][mpc_textblock content_width="100" font_preset="preset_2" '.$thanksFontSize.']'.$thanksText.' '.$linkWithSpan.' . '.$rememberTxt.'[/mpc_textblock][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]';
    }
   
    if( $id == 15 ) {
        $return = '[vc_row enable_top_separator="true" css=".vc_custom_1563696768341{margin-top: -120px !important;}"][vc_column][vc_column_text css=".vc_custom_1563696569710{margin-bottom: 0px !important;}"]<a name="jumpvideo"></a>[/vc_column_text][vc_empty_space height="30px"][/vc_column][/vc_row][vc_row css=".vc_custom_1563737488396{border-top-width: 10px !important;border-right-width: 10px !important;border-left-width: 10px !important;border-left-color: #f6c6cc !important;border-left-style: solid !important;border-right-color: #f6c6cc !important;border-right-style: solid !important;border-top-color: #f6c6cc !important;border-top-style: solid !important;}"][vc_column css=".vc_custom_1563737525425{margin-top: 20px !important;}"][vc_video link="'.$youtubeurl.'"][mpc_textblock preset="preset_0" content_width="100" font_preset="mpc_preset_65" font_color="#f6c6cc" font_size="35" font_line_height="1" font_align="left" margin_divider="true" margin_css="margin-bottom:20px;" mpc_tooltip__disable="true" mpc_tooltip__preset="mpc_preset_29"]<h1><span style="color: #402312;">key</span> takeaways</h1>[/mpc_textblock][/vc_column][/vc_row][vc_row css=".vc_custom_1557324731645{margin-top: -30px !important;border-right-width: 10px !important;border-left-width: 10px !important;border-left-color: #f6c6cc !important;border-left-style: solid !important;border-right-color: #f6c6cc !important;border-right-style: solid !important;}"]';
        foreach ($keyTakeAways as $i => $keyTakeAway) {
            // If even
            if( $i%2 == 0 ) {
                $return .= '[vc_column width="1/2"][mpc_divider preset="mpc_preset_19" align="left" content_type="title" content_position="100" content_border_divider="true" content_border_css="border-bottom:10px;border-color:#f6c6cc;border-style:solid;" content_padding_divider="true" content_padding_css="padding-top:5px;padding-right:15px;padding-bottom:5px;padding-left:15px;" font_color="#f6c6cc" font_size="16" font_line_height="1" font_transform="uppercase" font_align="center" title="'.$keyTakeAway['key'].'" icon="fa fa-anchor" icon_color="#b077b7" icon_size="30" lines_color="#f6c6cc" lines_weight="10" padding_divider="true" margin_divider="true" margin_css="margin-bottom:20px;margin-left:-20px;"][vc_column_text]'.$keyTakeAway['text'].'[/vc_column_text][vc_column_text]<h4>[linktimestamp link=#jumpvideo time='.$keyTakeAway['timestamp'].' color=#402312 icon=fa-youtube-play]Play the rest of part[/linktimestamp]</h4>[/vc_column_text][/vc_column]';
            }
            else {
                $return .= '[vc_column width="1/2"][mpc_divider preset="mpc_preset_19" align="left" content_type="title" content_position="0" content_border_divider="true" content_border_css="border-bottom:10px;border-color:#f6c6cc;border-style:solid;" content_padding_divider="true" content_padding_css="padding-top:5px;padding-right:15px;padding-bottom:5px;padding-left:15px;" font_color="#f6c6cc" font_size="16" font_line_height="1" font_transform="uppercase" font_align="left" title="'.$keyTakeAway['key'].'" icon="fa fa-anchor" icon_color="#b077b7" icon_size="30" lines_color="#f6c6cc" lines_weight="10" padding_divider="true" margin_divider="true" margin_css="margin-top:30px;margin-right:-20px;margin-bottom:20px;"][vc_column_text]'.$keyTakeAway['text'].'[/vc_column_text][vc_column_text]<h4>[linktimestamp link=#jumpvideo time='.$keyTakeAway['timestamp'].' color=#402312 icon=fa-youtube-play]Play the rest of part[/linktimestamp]</h4>[/vc_column_text][/vc_column]';
            }
        }
        $return .= '[/vc_row][vc_row css=".vc_custom_1557327108075{margin-top: -30px !important;border-right-width: 10px !important;border-bottom-width: 10px !important;border-left-width: 10px !important;border-left-color: #f6c6cc !important;border-left-style: solid !important;border-right-color: #f6c6cc !important;border-right-style: solid !important;border-bottom-color: #f6c6cc !important;border-bottom-style: solid !important;}"][vc_column][mpc_divider preset="mpc_preset_29" content_type="icon" content_border_divider="true" content_border_css="border-top:10px;border-right:10px;border-bottom:10px;border-left:10px;border-color:#f6c6cc;border-style:solid;border-radius:60px;" content_padding_css="padding:15px;" font_preset="mpc_preset_1" font_color="#a3a3a3" font_size="16" font_line_height="1" font_transform="uppercase" font_align="left" title="ADDONS" icon="eti eti_heart" icon_color="#f6c6cc" icon_size="30" lines_color="#f6c6cc" lines_weight="10" padding_divider="true" margin_divider="true" margin_css="margin-top:20px;margin-right:-20px;margin-left:-20px;"][vc_row_inner][vc_column_inner width="1/4" css=".vc_custom_1563737562875{margin-bottom: 20px !important;}"][mpc_image image="'.$mpcNextImageId.'" padding_divider="true" margin_divider="true" image_size="100x100" image_opacity="100" image_border_css="border-radius:75px;" image_inner_border_gap="0" effect="none" image_hover_opacity="100"][/vc_column_inner][vc_column_inner width="3/4"][mpc_textblock content_width="100" font_preset="preset_2" '.$thanksFontSize.']'.$thanksText.' '.$linkWithSpan.' . '.$rememberTxt.'[/mpc_textblock][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]';
    }

    if( $id == 16 ) {
        $return = '[vc_row enable_top_separator="true" css=".vc_custom_1563696768341{margin-top: -120px !important;}"][vc_column][vc_column_text css=".vc_custom_1563696569710{margin-bottom: 0px !important;}"]<a name="jumpvideo"></a>[/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1564669961822{margin-top: 60px !important;margin-bottom: 0px !important;}"][vc_column css=".vc_custom_1564669948071{margin-bottom: 0px !important;}"][vc_video link="'.$youtubeurl.'"][/vc_column][/vc_row][vc_row css=".vc_custom_1564670018709{margin-bottom: 0px !important;}"][vc_column preset="mpc_preset_80" content_preset="_mpc_preset_80" css=".vc_custom_1564670037088{margin-bottom: 0px !important;}"][vc_row_inner css=".vc_custom_1564670108164{margin-bottom: 0px !important;}"][vc_column_inner width="1/4" offset="vc_hidden-sm vc_hidden-xs"][mpc_image image="'.$mpcImageId.'" image_opacity="100" image_inner_border_gap="0" effect="none" image_hover_opacity="100" mpc_ribbon__preset="mpc_preset_9" mpc_ribbon__style="corner" mpc_ribbon__alignment="bottom-right" mpc_ribbon__font_preset="mpc_preset_35" mpc_ribbon__font_color="#f7f7f7" mpc_ribbon__font_size="20" mpc_ribbon__font_line_height="1.7" mpc_ribbon__font_transform="uppercase" mpc_ribbon__text="Key takeaways" mpc_ribbon__background_color="#f6c6cc" mpc_ribbon__border_divider="true" mpc_ribbon__border_css="border-top:3px;border-right:3px;border-bottom:3px;border-left:3px;border-color:#f7f7f7;border-style:dashed;"][/vc_column_inner][vc_column_inner width="3/4"][mpc_textblock preset="preset_0" content_width="100" font_preset="mpc_preset_38" font_color="#f6c6cc" font_size="35" font_line_height="1" font_align="left" mpc_tooltip__disable="true" mpc_tooltip__preset="mpc_preset_29"]<h1><span style="color: #402312;">key</span> takeaways</h1>[/mpc_textblock][mpc_divider lines_color="#f6c6cc" lines_weight="5" margin_divider="true" margin_css="margin-top:20px;margin-bottom:20px;"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]';
        foreach ($keyTakeAways as $i => $keyTakeAway) {
            // If even
            if( $i%2 == 0 ) {
                $return .= '[vc_row css=".vc_custom_1555865449496{margin-top: -25px !important;}"][vc_column][mpc_divider preset="mpc_preset_19" align="left" content_type="title" content_position="0" content_border_css="border-width:2px;border-color:#f6c6cc;border-style:solid;" content_padding_divider="true" content_padding_css="padding-top:5px;padding-right:15px;padding-bottom:5px;padding-left:15px;" font_color="#f6c6cc" font_size="16" font_line_height="1" font_transform="uppercase" font_align="left" title="'.$keyTakeAway['key'].'" icon="fa fa-anchor" icon_color="#b077b7" icon_size="30" lines_color="#f6c6cc" lines_weight="2" padding_divider="true"][vc_column_text css=".vc_custom_1563808217847{margin-top: 10px !important;}"]'.$keyTakeAway['text'].'[/vc_column_text][vc_column_text css=".vc_custom_1563799748773{margin-top: 10px !important;margin-bottom: 10px !important;}"]<h4>[linktimestamp link=#jumpvideo time='.$keyTakeAway['timestamp'].' color=#402312 icon=fa-youtube-play]Play the rest of part[/linktimestamp]</h4>[/vc_column_text][/vc_column][/vc_row]';
            }
            else {
                $return .= '[vc_row css=".vc_custom_1555865449496{margin-top: -25px !important;}"][vc_column][mpc_divider preset="mpc_preset_20" content_type="title" content_position="100" content_border_css="border-width:2px;border-color:#f6c6cc;border-style:solid;" content_padding_divider="true" content_padding_css="padding-top:5px;padding-right:15px;padding-bottom:5px;padding-left:15px;" font_preset="mpc_preset_1" font_color="#f6c6cc" font_size="16" font_line_height="1" font_transform="uppercase" font_align="center" title="'.$keyTakeAway['key'].'" icon="fa fa-paint-brush" icon_color="#76bdcc" icon_size="30" lines_color="#f6c6cc" lines_weight="2"][vc_column_text css=".vc_custom_1563808228065{margin-top: 10px !important;}"]'.$keyTakeAway['text'].'[/vc_column_text][vc_column_text css=".vc_custom_1563808175828{margin-top: 10px !important;margin-bottom: 10px !important;}"]<h4 style="text-align: right;">[linktimestamp link=#jumpvideo time='.$keyTakeAway['timestamp'].' color=#402312 icon=fa-youtube-play]Play the rest of part[/linktimestamp]</h4>[/vc_column_text][/vc_column][/vc_row]';
            }
        }
        $return .= '[vc_row][vc_column][mpc_divider preset="mpc_preset_29" content_type="icon" content_border_css="border-width:2px;border-color:#f6c6cc;border-style:solid;border-radius:60px;" content_padding_css="padding:15px;" font_preset="mpc_preset_1" font_color="#a3a3a3" font_size="16" font_line_height="1" font_transform="uppercase" font_align="left" title="ADDONS" icon="eti eti_heart" icon_color="#f6c6cc" icon_size="30" lines_color="#f6c6cc" lines_weight="2" padding_divider="true"][vc_row_inner css=".vc_custom_1563726369192{margin-top: 10px !important;}"][vc_column_inner width="1/4" css=".vc_custom_1563726492075{margin-bottom: 20px !important;}"][mpc_image image="'.$mpcNextImageId.'" padding_divider="true" margin_divider="true" image_size="100x100" image_opacity="100" image_border_css="border-radius:75px;" image_inner_border_gap="0" effect="none" image_hover_opacity="100"][/vc_column_inner][vc_column_inner width="3/4"][mpc_textblock content_width="100" font_preset="preset_2" '.$thanksFontSize.']'.$thanksText.' '.$linkWithSpan.' . '.$rememberTxt.'[/mpc_textblock][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]';
    }

    if( $id == 17 ) {
        $return = '[vc_row enable_top_separator="true" css=".vc_custom_1563696768341{margin-top: -120px !important;}"][vc_column][vc_column_text css=".vc_custom_1563696569710{margin-bottom: 0px !important;}"]<a name="jumpvideo"></a>[/vc_column_text][vc_empty_space height="30px"][/vc_column][/vc_row][vc_row css=".vc_custom_1563737488396{border-top-width: 10px !important;border-right-width: 10px !important;border-left-width: 10px !important;border-left-color: #b8d58f !important;border-left-style: solid !important;border-right-color: #b8d58f !important;border-right-style: solid !important;border-top-color: #b8d58f !important;border-top-style: solid !important;}"][vc_column css=".vc_custom_1563737525425{margin-top: 20px !important;}"][vc_video link="'.$youtubeurl.'"][mpc_textblock preset="preset_0" content_width="100" font_preset="mpc_preset_65" font_color="#b8d58f" font_size="35" font_line_height="1" font_align="left" margin_divider="true" margin_css="margin-bottom:20px;" mpc_tooltip__disable="true" mpc_tooltip__preset="mpc_preset_29"]<h1><span style="color: #402312;">key</span> takeaways</h1>[/mpc_textblock][/vc_column][/vc_row][vc_row css=".vc_custom_1557324731645{margin-top: -30px !important;border-right-width: 10px !important;border-left-width: 10px !important;border-left-color: #b8d58f !important;border-left-style: solid !important;border-right-color: #b8d58f !important;border-right-style: solid !important;}"]';
        foreach ($keyTakeAways as $i => $keyTakeAway) {
            // If even
            if( $i%2 == 0 ) {
                $return .= '[vc_column width="1/2"][mpc_divider preset="mpc_preset_19" align="left" content_type="title" content_position="100" content_border_divider="true" content_border_css="border-bottom:10px;border-color:#b8d58f;border-style:solid;" content_padding_divider="true" content_padding_css="padding-top:5px;padding-right:15px;padding-bottom:5px;padding-left:15px;" font_color="#b8d58f" font_size="16" font_line_height="1" font_transform="uppercase" font_align="center" title="'.$keyTakeAway['key'].'" icon="fa fa-anchor" icon_color="#b077b7" icon_size="30" lines_color="#b8d58f" lines_weight="10" padding_divider="true" margin_divider="true" margin_css="margin-bottom:20px;margin-left:-20px;"][vc_column_text]'.$keyTakeAway['text'].'[/vc_column_text][vc_column_text]<h4>[linktimestamp link=#jumpvideo time='.$keyTakeAway['timestamp'].' color=#402312 icon=fa-youtube-play]Play the rest of part[/linktimestamp]</h4>[/vc_column_text][/vc_column]';
            }
            else {
                $return .= '[vc_column width="1/2"][mpc_divider preset="mpc_preset_19" align="left" content_type="title" content_position="0" content_border_divider="true" content_border_css="border-bottom:10px;border-color:#b8d58f;border-style:solid;" content_padding_divider="true" content_padding_css="padding-top:5px;padding-right:15px;padding-bottom:5px;padding-left:15px;" font_color="#b8d58f" font_size="16" font_line_height="1" font_transform="uppercase" font_align="left" title="'.$keyTakeAway['key'].'" icon="fa fa-anchor" icon_color="#b077b7" icon_size="30" lines_color="#b8d58f" lines_weight="10" padding_divider="true" margin_divider="true" margin_css="margin-top:30px;margin-right:-20px;margin-bottom:20px;"][vc_column_text]'.$keyTakeAway['text'].'[/vc_column_text][vc_column_text]<h4>[linktimestamp link=#jumpvideo time='.$keyTakeAway['timestamp'].' color=#402312 icon=fa-youtube-play]Play the rest of part[/linktimestamp]</h4>[/vc_column_text][/vc_column]';
            }
        }
        $return .= '[/vc_row][vc_row css=".vc_custom_1557327108075{margin-top: -30px !important;border-right-width: 10px !important;border-bottom-width: 10px !important;border-left-width: 10px !important;border-left-color: #b8d58f !important;border-left-style: solid !important;border-right-color: #b8d58f !important;border-right-style: solid !important;border-bottom-color: #b8d58f !important;border-bottom-style: solid !important;}"][vc_column][mpc_divider preset="mpc_preset_29" content_type="icon" content_border_divider="true" content_border_css="border-top:10px;border-right:10px;border-bottom:10px;border-left:10px;border-color:#b8d58f;border-style:solid;border-radius:60px;" content_padding_css="padding:15px;" font_preset="mpc_preset_1" font_color="#a3a3a3" font_size="16" font_line_height="1" font_transform="uppercase" font_align="left" title="ADDONS" icon="eti eti_heart" icon_color="#b8d58f" icon_size="30" lines_color="#b8d58f" lines_weight="10" padding_divider="true" margin_divider="true" margin_css="margin-top:20px;margin-right:-20px;margin-left:-20px;"][vc_row_inner][vc_column_inner width="1/4" css=".vc_custom_1563737562875{margin-bottom: 20px !important;}"][mpc_image image="'.$mpcNextImageId.'" padding_divider="true" margin_divider="true" image_size="100x100" image_opacity="100" image_border_css="border-radius:75px;" image_inner_border_gap="0" effect="none" image_hover_opacity="100"][/vc_column_inner][vc_column_inner width="3/4"][mpc_textblock content_width="100" font_preset="preset_2" '.$thanksFontSize.']'.$thanksText.' '.$linkWithSpan.' . '.$rememberTxt.'[/mpc_textblock][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]';
    }

    if( $id == 18 ) {
        $return = '[vc_row enable_top_separator="true" css=".vc_custom_1563696768341{margin-top: -120px !important;}"][vc_column][vc_column_text css=".vc_custom_1563696569710{margin-bottom: 0px !important;}"]<a name="jumpvideo"></a>[/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1564676552248{margin-top: 60px !important;margin-bottom: 0px !important;}"][vc_column][vc_video link="'.$youtubeurl.'"][/vc_column][/vc_row][vc_row][vc_column][vc_row_inner][vc_column_inner width="1/4" offset="vc_hidden-sm vc_hidden-xs"][mpc_image image="'.$mpcImageId.'" image_opacity="100" image_inner_border_gap="0" effect="none" image_hover_opacity="100" mpc_ribbon__preset="mpc_preset_16" mpc_ribbon__style="fullwidth" mpc_ribbon__corners_color="#4a7c8e" mpc_ribbon__font_preset="mpc_preset_17" mpc_ribbon__font_color="#f7f7f7" mpc_ribbon__font_size="22" mpc_ribbon__font_line_height="1.7" mpc_ribbon__text="key takeaways" mpc_ribbon__background_type="gradient" mpc_ribbon__background_gradient="#402312||#f6c6cc||50;50||225||linear" mpc_ribbon__padding_divider="true" mpc_ribbon__padding_css="padding-top:15px;padding-bottom:15px;" mpc_ribbon__margin_divider="true" mpc_ribbon__margin_css="margin-top:180px;"][/vc_column_inner][vc_column_inner width="3/4"][mpc_textblock preset="preset_0" content_width="100" font_preset="preset_2" font_color="#f6c6cc" font_size="35" font_line_height="1" font_align="left" mpc_tooltip__disable="true" mpc_tooltip__preset="mpc_preset_29"]<h1><span style="color: #402312;">key</span> takeaways</h1>[/mpc_textblock][mpc_divider lines_color="#f6c6cc" lines_weight="5" margin_divider="true" margin_css="margin-top:20px;margin-bottom:20px;"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row][vc_column]';
        $keyTakeAwaysCheckbox = '';
        foreach ($keyTakeAways as $i => $keyTakeAway) {
            
            // Key take away creator
            $keyTakeAwaysCheckbox .= '<h4><i class="fa fa-check" style="font-size: 22px; color: #f6c6cc;"></i> <span style="color: #402312;">'.$keyTakeAway['key'].'</span></h4>';

            // If even
            if( $i%2 == 0 ) {
                $return .= '[vc_row css=".vc_custom_1555865449496{margin-top: -25px !important;}"][vc_column][mpc_divider preset="mpc_preset_19" align="left" content_type="title" content_position="0" content_border_css="border-width:2px;border-color:#b8d58f;border-style:solid;" content_padding_divider="true" content_padding_css="padding-top:5px;padding-right:15px;padding-bottom:5px;padding-left:15px;" font_color="#b8d58f" font_size="16" font_line_height="1" font_transform="uppercase" font_align="left" title="'.$keyTakeAway['key'].'" icon="fa fa-anchor" icon_color="#b077b7" icon_size="30" lines_color="#b8d58f" lines_weight="2" padding_divider="true"][vc_column_text css=".vc_custom_1563808217847{margin-top: 10px !important;}"]'.$keyTakeAway['text'].'[/vc_column_text][vc_column_text css=".vc_custom_1563799748773{margin-top: 10px !important;margin-bottom: 10px !important;}"]<h4>[linktimestamp link=#jumpvideo time='.$keyTakeAway['timestamp'].' color=#402312 icon=fa-youtube-play]Play the rest of part[/linktimestamp]</h4>[/vc_column_text][/vc_column][/vc_row]';
            }
            else {
                $return .= '[vc_row css=".vc_custom_1555865449496{margin-top: -25px !important;}"][vc_column][mpc_divider preset="mpc_preset_20" content_type="title" content_position="100" content_border_css="border-width:2px;border-color:#b8d58f;border-style:solid;" content_padding_divider="true" content_padding_css="padding-top:5px;padding-right:15px;padding-bottom:5px;padding-left:15px;" font_preset="mpc_preset_1" font_color="#b8d58f" font_size="16" font_line_height="1" font_transform="uppercase" font_align="center" title="'.$keyTakeAway['key'].'" icon="fa fa-paint-brush" icon_color="#76bdcc" icon_size="30" lines_color="#b8d58f" lines_weight="2"][vc_column_text css=".vc_custom_1563808228065{margin-top: 10px !important;}"]'.$keyTakeAway['text'].'[/vc_column_text][vc_column_text css=".vc_custom_1563808175828{margin-top: 10px !important;margin-bottom: 10px !important;}"]<h4 style="text-align: right;">[linktimestamp link=#jumpvideo time='.$keyTakeAway['timestamp'].' color=#402312 icon=fa-youtube-play]Play the rest of part[/linktimestamp]</h4>[/vc_column_text][/vc_column][/vc_row]';
                }
            }
            $return .= '[mpc_icon_column preset="mpc_preset_42" layout="style_2" background_color="#ffffff" border_css="border-width:2px;border-color:#f6c6cc;border-style:solid;border-radius:0px;" padding_css="padding:25px;" margin_divider="true" margin_css="margin-top:40px;" title_font_preset="preset_2" title_font_color="#555555" title_font_size="17" title_font_line_height="1.4" title_font_transform="uppercase" title_font_align="left" title="Key takeways" title_margin_divider="true" title_margin_css="margin-bottom:8px;" content_font_preset="mpc_preset_1" content_font_color="#a5a5a5" content_font_size="14" content_font_line_height="1.5" content_font_align="left" hover_border_css="border-color:#f6c6cc;border-radius:0px;" mpc_icon__transition="fade" mpc_icon__icon="etl etl-heart" mpc_icon__icon_color="#402312" mpc_icon__icon_size="30" mpc_icon__background_color="#ffffff" mpc_icon__border_css="border-width:2px;border-color:#402312;border-style:solid;border-radius:0px;" mpc_icon__padding_css="padding:8px;" mpc_icon__margin_divider="true" mpc_icon__margin_css="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:-15px;" mpc_icon__hover_border_css="border-color:#402312;" mpc_divider__disable="true" mpc_divider__width="10" mpc_divider__align="left" mpc_divider__content_padding_divider="true" mpc_divider__content_padding_css="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;" mpc_divider__lines_color="#dddddd" mpc_divider__padding_divider="true" mpc_divider__padding_css="padding-top:3px;padding-bottom:3px;"]'.$keyTakeAwaysCheckbox.'[/mpc_icon_column]
                [/vc_column][/vc_row][vc_row][vc_column width="1/4" css=".vc_custom_1563799691875{margin-bottom: 20px !important;}"][mpc_image image="'.$mpcNextImageId.'" padding_divider="true" margin_divider="true" image_size="100x100" image_opacity="100" image_border_css="border-radius:75px;" image_inner_border_gap="0" effect="none" image_hover_opacity="100"][/vc_column][vc_column width="3/4"][mpc_textblock content_width="100" font_preset="preset_2" '.$thanksFontSize.']'.$thanksText.' '.$linkWithSpan.' . '.$rememberTxt.'[/mpc_textblock][/vc_column][/vc_row]';
    }

    if( $id == 19 ) {
    
        $return = '[vc_row enable_top_separator="true" css=".vc_custom_1563696768341{margin-top: -120px !important;}"][vc_column][vc_column_text css=".vc_custom_1563696569710{margin-bottom: 0px !important;}"]<a name="jumpvideo"></a>[/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1564669887174{margin-top: 40px !important;margin-bottom: 0px !important;}"][vc_column][vc_video link="'.$youtubeurl.'"][/vc_column][/vc_row][vc_row][vc_column][vc_row_inner][vc_column_inner width="1/4" offset="vc_hidden-sm vc_hidden-xs"][mpc_image image="'.$mpcImageId.'" margin_divider="true" margin_css="margin-bottom:30px;" image_opacity="100" image_inner_border_gap="0" effect="none" image_hover_opacity="100" mpc_ribbon__preset="mpc_preset_16" mpc_ribbon__style="fullwidth" mpc_ribbon__corners_color="#4a7c8e" mpc_ribbon__font_preset="mpc_preset_17" mpc_ribbon__font_color="#f7f7f7" mpc_ribbon__font_size="22" mpc_ribbon__font_line_height="1.7" mpc_ribbon__text="key takeaway" mpc_ribbon__background_type="gradient" mpc_ribbon__background_gradient="#402312||#b8d58f||50;50||225||linear" mpc_ribbon__padding_divider="true" mpc_ribbon__padding_css="padding-top:15px;padding-bottom:15px;" mpc_ribbon__margin_divider="true" mpc_ribbon__margin_css="margin-top:180px;"][/vc_column_inner][vc_column_inner width="3/4"][mpc_textblock preset="preset_0" content_width="100" font_preset="mpc_preset_65" font_color="#b8d58f" font_size="35" font_line_height="1" font_align="left" margin_divider="true" mpc_tooltip__disable="true" mpc_tooltip__preset="mpc_preset_29"]<h1><span style="color: #402312;">key</span> takeaways</h1>[/mpc_textblock][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]';
        foreach ($keyTakeAways as $i => $keyTakeAway) {
            // If even
            if( $i%2 == 0 ) {
                $return .= '[mpc_divider content_type="title" content_position="0" content_border_divider="true" content_border_css="border-top:0px;border-right:0px;border-bottom:0px;border-left:10px;border-color:#402312;border-style:solid;border-radius:0px;" content_padding_divider="true" content_padding_css="padding-left:15px;" font_preset="preset_2" font_color="#515151" font_size="18" font_line_height="1.2" font_transform="uppercase" font_align="left" title="'.$keyTakeAway['key'].'" icon="eti eti_lock-open_alt" icon_color="#fea580" icon_size="24" lines_color="#f6c6cc" lines_weight="20" padding_divider="true" padding_css="padding-bottom:10px;" margin_divider="true" margin_css="margin-top:20px;margin-bottom:20px;"][vc_column_text css=".vc_custom_1563810621459{margin-bottom: 0px !important;}"]'.$keyTakeAway['text'].'[/vc_column_text][vc_column_text css=".vc_custom_1563810575361{margin-top: 10px !important;margin-bottom: 10px !important;}"]<h4>[linktimestamp link=#jumpvideo time='.$keyTakeAway['timestamp'].' color=#402312 icon=fa-youtube-play]Play the rest of part[/linktimestamp]</h4>[/vc_column_text]';
            }
            else {
                $return .= '[mpc_divider content_type="title" content_position="100" content_border_divider="true" content_border_css="border-top:0px;border-right:10px;border-bottom:0px;border-left:0px;border-color:#402312;border-style:solid;border-radius:0px;" content_padding_divider="true" content_padding_css="padding-right:15px;" font_preset="preset_2" font_color="#515151" font_size="18" font_line_height="1.2" font_transform="uppercase" font_align="right" title="'.$keyTakeAway['key'].'" icon="eti eti_lock-open_alt" icon_color="#fea580" icon_size="24" lines_color="#f6c6cc" lines_weight="20" padding_divider="true" padding_css="padding-bottom:10px;" margin_divider="true" margin_css="margin-top:20px;margin-bottom:20px;"][vc_column_text css=".vc_custom_1563810602249{margin-bottom: 0px !important;}"]'.$keyTakeAway['text'].'[/vc_column_text][vc_column_text css=".vc_custom_1563809048804{margin-top: 10px !important;margin-bottom: 10px !important;}"]<h4 style="text-align: right;">[linktimestamp link=#jumpvideo time='.$keyTakeAway['timestamp'].' color=#402312 icon=fa-youtube-play]Play the rest of part[/linktimestamp]</h4>[/vc_column_text]';
            }
        }
        $return .= '[vc_row][vc_column][mpc_divider preset="mpc_preset_29" content_type="icon" content_border_css="border-width:2px;border-color:#b8d58f;border-style:solid;border-radius:60px;" content_padding_css="padding:15px;" font_preset="mpc_preset_1" font_color="#a3a3a3" font_size="16" font_line_height="1" font_transform="uppercase" font_align="left" title="ADDONS" icon="eti eti_heart" icon_color="#b8d58f" icon_size="30" lines_color="#b8d58f" lines_weight="2" padding_divider="true"][vc_row_inner css=".vc_custom_1563726369192{margin-top: 10px !important;}"][vc_column_inner width="1/4" css=".vc_custom_1563726492075{margin-bottom: 20px !important;}"][mpc_image image="'.$mpcNextImageId.'" padding_divider="true" margin_divider="true" image_size="100x100" image_opacity="100" image_border_css="border-radius:75px;" image_inner_border_gap="0" effect="none" image_hover_opacity="100"][/vc_column_inner][vc_column_inner width="3/4"][mpc_textblock content_width="100" font_preset="preset_2" '.$thanksFontSize.']'.$thanksText.' '.$linkWithSpan.' . '.$rememberTxt.'[/mpc_textblock][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]';
    }

    if( $id == 20 ) {
       
        $return = '[vc_row enable_top_separator="true" css=".vc_custom_1563696768341{margin-top: -120px !important;}"][vc_column][vc_column_text css=".vc_custom_1563696569710{margin-bottom: 0px !important;}"]<a name="jumpvideo"></a>[/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1564669961822{margin-top: 60px !important;margin-bottom: 0px !important;}"][vc_column css=".vc_custom_1564669948071{margin-bottom: 0px !important;}"][vc_video link="'.$youtubeurl.'"][/vc_column][/vc_row][vc_row css=".vc_custom_1564670018709{margin-bottom: 0px !important;}"][vc_column preset="mpc_preset_80" content_preset="_mpc_preset_80" css=".vc_custom_1564670037088{margin-bottom: 0px !important;}"][vc_row_inner css=".vc_custom_1564670108164{margin-bottom: 0px !important;}"][vc_column_inner width="1/4" offset="vc_hidden-sm vc_hidden-xs"][mpc_image image="'.$mpcImageId.'" image_opacity="100" image_inner_border_gap="0" effect="none" image_hover_opacity="100" mpc_ribbon__preset="mpc_preset_9" mpc_ribbon__style="corner" mpc_ribbon__alignment="bottom-right" mpc_ribbon__font_preset="mpc_preset_35" mpc_ribbon__font_color="#f7f7f7" mpc_ribbon__font_size="20" mpc_ribbon__font_line_height="1.7" mpc_ribbon__font_transform="uppercase" mpc_ribbon__text="Key takeaways" mpc_ribbon__background_color="#b8d58f" mpc_ribbon__border_divider="true" mpc_ribbon__border_css="border-top:3px;border-right:3px;border-bottom:3px;border-left:3px;border-color:#f7f7f7;border-style:dashed;"][/vc_column_inner][vc_column_inner width="3/4"][mpc_textblock preset="preset_0" content_width="100" font_preset="mpc_preset_38" font_color="#b8d58f" font_size="35" font_line_height="1" font_align="left" mpc_tooltip__disable="true" mpc_tooltip__preset="mpc_preset_29"]<h1><span style="color: #402312;">key</span> takeaways</h1>[/mpc_textblock][mpc_divider lines_color="#b8d58f" lines_weight="5" margin_divider="true" margin_css="margin-top:20px;margin-bottom:20px;"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row][vc_column]';
        $keyTakeAwaysCheckbox = '';
        foreach ($keyTakeAways as $i => $keyTakeAway) {
            
            // Key take away creator
            $keyTakeAwaysCheckbox .= '<h4><i class="fa fa-check" style="font-size: 22px; color: #b8d58f;"></i> <span style="color: #402312;">'.$keyTakeAway['key'].'</span></h4>';

            // If even
            if( $i%2 == 0 ) {
                $return .= '[mpc_divider preset="mpc_preset_23" align="left" content_type="title" content_position="0" content_border_css="border-width:2px;border-color:#b8d58f;border-style:solid;border-radius:30px;" content_padding_divider="true" content_padding_css="padding-top:5px;padding-right:15px;padding-bottom:5px;padding-left:15px;" font_color="#b8d58f" font_size="16" font_line_height="1" font_transform="uppercase" font_align="left" title="'.$keyTakeAway['key'].'" icon="fa fa-anchor" icon_color="#b077b7" icon_size="30" lines_color="#b8d58f" lines_weight="2" padding_divider="true" margin_divider="true" margin_css="margin-top:20px;margin-bottom:20px;"][vc_column_text]'.$keyTakeAway['text'].'[/vc_column_text][vc_column_text css=".vc_custom_1563807489404{margin-top: 0px !important;margin-bottom: 10px !important;}"]<h4>[linktimestamp link=#jumpvideo time='.$keyTakeAway['timestamp'].' color=#402312 icon=fa-youtube-play]Play the rest of part[/linktimestamp]</h4>[/vc_column_text]';
            }
            else {
                $return .= '[mpc_divider preset="mpc_preset_21" content_type="title" content_position="100" content_border_css="border-width:2px;border-color:#b8d58f;border-style:solid;border-radius:30px;" content_padding_divider="true" content_padding_css="padding-top:5px;padding-right:15px;padding-bottom:5px;padding-left:15px;" font_color="#b8d58f" font_size="16" font_line_height="1" font_transform="uppercase" font_align="left" title="'.$keyTakeAway['key'].'" icon="fa fa-anchor" icon_color="#b077b7" icon_size="30" lines_color="#b8d58f" lines_weight="2" padding_divider="true" margin_divider="true" margin_css="margin-top:20px;margin-bottom:20px;"][vc_column_text css=".vc_custom_1563810661232{margin-bottom: 0px !important;}"]'.$keyTakeAway['text'].'[/vc_column_text][vc_column_text css=".vc_custom_1563807532675{margin-top: 0px !important;margin-bottom: 20px !important;}"]<h4 style="text-align: right;">[linktimestamp link=#jumpvideo time='.$keyTakeAway['timestamp'].' color=#402312 icon=fa-youtube-play]Play the rest of part[/linktimestamp]</h4>[/vc_column_text]';
            }
        }
        $return .= '[mpc_icon_column preset="mpc_preset_42" layout="style_6" alignment="right" background_color="#ffffff" border_css="border-width:2px;border-color:#b8d58f;border-style:solid;border-radius:0px;" padding_css="padding:25px;" title_font_preset="mpc_preset_1" title_font_color="#555555" title_font_size="17" title_font_line_height="1.4" title_font_transform="uppercase" title_font_align="right" title="Key takeways" title_margin_divider="true" title_margin_css="margin-bottom:8px;" content_font_preset="mpc_preset_1" content_font_color="#a5a5a5" content_font_size="14" content_font_line_height="1.5" content_font_align="right" hover_border_css="border-color:#b8d58f;border-radius:0px;" mpc_icon__transition="fade" mpc_icon__icon="etl etl-happy" mpc_icon__icon_color="#402312" mpc_icon__icon_size="30" mpc_icon__background_color="#ffffff" mpc_icon__border_css="border-width:2px;border-color:#402312;border-style:solid;border-radius:0px;" mpc_icon__padding_css="padding:8px;" mpc_icon__margin_divider="true" mpc_icon__margin_css="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:-15px;" mpc_icon__hover_border_css="border-color:#402312;" mpc_divider__disable="true" mpc_divider__width="10" mpc_divider__align="left" mpc_divider__content_padding_divider="true" mpc_divider__content_padding_css="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;" mpc_divider__lines_color="#dddddd" mpc_divider__padding_divider="true" mpc_divider__padding_css="padding-top:3px;padding-bottom:3px;"]'.$keyTakeAwaysCheckbox.'[/mpc_icon_column][/vc_column][/vc_row][vc_row][vc_column width="1/4" css=".vc_custom_1563799691875{margin-bottom: 20px !important;}"][mpc_image image="'.$mpcNextImageId.'" padding_divider="true" margin_divider="true" image_size="100x100" image_opacity="100" image_border_css="border-radius:75px;" image_inner_border_gap="0" effect="none" image_hover_opacity="100"][/vc_column][vc_column width="3/4"][mpc_textblock content_width="100" font_preset="preset_2" '.$thanksFontSize.']'.$thanksText.' '.$linkWithSpan.' . '.$rememberTxt.'[/mpc_textblock][/vc_column][/vc_row]';
    }

    if( $id == 21 ) {
       
        $return = '[vc_row enable_top_separator="true" css=".vc_custom_1563696768341{margin-top: -120px !important;}"][vc_column][vc_column_text css=".vc_custom_1563696569710{margin-bottom: 0px !important;}"]<a name="jumpvideo"></a>[/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1564669961822{margin-top: 60px !important;margin-bottom: 0px !important;}"][vc_column css=".vc_custom_1564669948071{margin-bottom: 0px !important;}"][vc_video link="'.$youtubeurl.'"][/vc_column][/vc_row][vc_row css=".vc_custom_1564670018709{margin-bottom: 0px !important;}"][vc_column preset="mpc_preset_80" content_preset="_mpc_preset_80" css=".vc_custom_1564670037088{margin-bottom: 0px !important;}"][vc_row_inner css=".vc_custom_1564670108164{margin-bottom: 0px !important;}"][vc_column_inner width="1/4" offset="vc_hidden-sm vc_hidden-xs"][mpc_image image="'.$mpcImageId.'" image_opacity="100" image_inner_border_gap="0" effect="none" image_hover_opacity="100" mpc_ribbon__preset="mpc_preset_9" mpc_ribbon__style="corner" mpc_ribbon__alignment="bottom-right" mpc_ribbon__font_preset="mpc_preset_35" mpc_ribbon__font_color="#f7f7f7" mpc_ribbon__font_size="20" mpc_ribbon__font_line_height="1.7" mpc_ribbon__font_transform="uppercase" mpc_ribbon__text="Key takeaways" mpc_ribbon__background_color="#b8d58f" mpc_ribbon__border_divider="true" mpc_ribbon__border_css="border-top:3px;border-right:3px;border-bottom:3px;border-left:3px;border-color:#f7f7f7;border-style:dashed;"][/vc_column_inner][vc_column_inner width="3/4"][mpc_textblock preset="preset_0" content_width="100" font_preset="mpc_preset_38" font_color="#b8d58f" font_size="35" font_line_height="1" font_align="left" mpc_tooltip__disable="true" mpc_tooltip__preset="mpc_preset_29"]<h1><span style="color: #402312;">key</span> takeaways</h1>[/mpc_textblock][mpc_divider lines_color="#b8d58f" lines_weight="5" margin_divider="true" margin_css="margin-top:20px;margin-bottom:20px;"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row][vc_column]';
        $keyTakeAwaysCheckbox = '';
        foreach ($keyTakeAways as $i => $keyTakeAway) {
                      
            // Key take away creator
            $keyTakeAwaysCheckbox .= '<h4><i class="fa fa-check" style="font-size: 22px; color: #b8d58f;"></i> <span style="color: #402312;">'.$keyTakeAway['key'].'</span></h4>';

            // If even
            if( $i%2 == 0 ) {
                $return .= '[mpc_divider preset="mpc_preset_23" align="left" content_type="title" content_position="0" content_border_css="border-width:2px;border-color:#b8d58f;border-style:solid;border-radius:30px;" content_padding_divider="true" content_padding_css="padding-top:5px;padding-right:15px;padding-bottom:5px;padding-left:15px;" font_color="#b8d58f" font_size="16" font_line_height="1" font_transform="uppercase" font_align="left" title="'.$keyTakeAway['key'].'" icon="fa fa-anchor" icon_color="#b077b7" icon_size="30" lines_color="#b8d58f" lines_weight="2" padding_divider="true" margin_divider="true" margin_css="margin-top:20px;margin-bottom:20px;"][vc_column_text]'.$keyTakeAway['text'].'[/vc_column_text][vc_column_text css=".vc_custom_1563807489404{margin-top: 0px !important;margin-bottom: 10px !important;}"]<h4>[linktimestamp link=#jumpvideo time='.$keyTakeAway['timestamp'].' color=#402312 icon=fa-youtube-play]Play the rest of part[/linktimestamp]</h4>[/vc_column_text]';
            }
            else {
                $return .= '[mpc_divider preset="mpc_preset_21" content_type="title" content_position="100" content_border_css="border-width:2px;border-color:#b8d58f;border-style:solid;border-radius:30px;" content_padding_divider="true" content_padding_css="padding-top:5px;padding-right:15px;padding-bottom:5px;padding-left:15px;" font_color="#b8d58f" font_size="16" font_line_height="1" font_transform="uppercase" font_align="left" title="'.$keyTakeAway['key'].'" icon="fa fa-anchor" icon_color="#b077b7" icon_size="30" lines_color="#b8d58f" lines_weight="2" padding_divider="true" margin_divider="true" margin_css="margin-top:20px;margin-bottom:20px;"][vc_column_text css=".vc_custom_1563810661232{margin-bottom: 0px !important;}"]'.$keyTakeAway['text'].'[/vc_column_text][vc_column_text css=".vc_custom_1563807532675{margin-top: 0px !important;margin-bottom: 20px !important;}"]<h4 style="text-align: right;">[linktimestamp link=#jumpvideo time='.$keyTakeAway['timestamp'].' color=#402312 icon=fa-youtube-play]Play the rest of part[/linktimestamp]</h4>[/vc_column_text]';
            }
        }
        $return .= '[mpc_icon_column preset="mpc_preset_42" layout="style_6" alignment="right" background_color="#ffffff" border_css="border-width:2px;border-color:#b8d58f;border-style:solid;border-radius:0px;" padding_css="padding:25px;" title_font_preset="mpc_preset_1" title_font_color="#555555" title_font_size="17" title_font_line_height="1.4" title_font_transform="uppercase" title_font_align="right" title="Key takeways" title_margin_divider="true" title_margin_css="margin-bottom:8px;" content_font_preset="mpc_preset_1" content_font_color="#a5a5a5" content_font_size="14" content_font_line_height="1.5" content_font_align="right" hover_border_css="border-color:#b8d58f;border-radius:0px;" mpc_icon__transition="fade" mpc_icon__icon="etl etl-happy" mpc_icon__icon_color="#402312" mpc_icon__icon_size="30" mpc_icon__background_color="#ffffff" mpc_icon__border_css="border-width:2px;border-color:#402312;border-style:solid;border-radius:0px;" mpc_icon__padding_css="padding:8px;" mpc_icon__margin_divider="true" mpc_icon__margin_css="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:-15px;" mpc_icon__hover_border_css="border-color:#402312;" mpc_divider__disable="true" mpc_divider__width="10" mpc_divider__align="left" mpc_divider__content_padding_divider="true" mpc_divider__content_padding_css="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;" mpc_divider__lines_color="#dddddd" mpc_divider__padding_divider="true" mpc_divider__padding_css="padding-top:3px;padding-bottom:3px;"]'.$keyTakeAwaysCheckbox.'[/mpc_icon_column][/vc_column][/vc_row][vc_row][vc_column width="1/4" css=".vc_custom_1563799691875{margin-bottom: 20px !important;}"][mpc_image image="'.$mpcNextImageId.'" padding_divider="true" margin_divider="true" image_size="100x100" image_opacity="100" image_border_css="border-radius:75px;" image_inner_border_gap="0" effect="none" image_hover_opacity="100"][/vc_column][vc_column width="3/4"][mpc_textblock content_width="100" font_preset="preset_2" '.$thanksFontSize.']'.$thanksText.' '.$linkWithSpan.' . '.$rememberTxt.'[/mpc_textblock][/vc_column][/vc_row]';
    }

    if( $id == 22 ) {
       
        $return = '[vc_row enable_top_separator="true" css=".vc_custom_1563696768341{margin-top: -120px !important;}"][vc_column][vc_column_text css=".vc_custom_1563696569710{margin-bottom: 0px !important;}"]<a name="jumpvideo"></a>[/vc_column_text][vc_empty_space height="30px"][/vc_column][/vc_row][vc_row css=".vc_custom_1563737488396{border-top-width: 10px !important;border-right-width: 10px !important;border-left-width: 10px !important;border-left-color: #cce0f2 !important;border-left-style: solid !important;border-right-color: #cce0f2 !important;border-right-style: solid !important;border-top-color: #cce0f2 !important;border-top-style: solid !important;}"][vc_column css=".vc_custom_1563737525425{margin-top: 20px !important;}"][vc_video link="'.$youtubeurl.'"][mpc_textblock preset="preset_0" content_width="100" font_preset="mpc_preset_65" font_color="#cce0f2" font_size="35" font_line_height="1" font_align="left" margin_divider="true" margin_css="margin-bottom:20px;" mpc_tooltip__disable="true" mpc_tooltip__preset="mpc_preset_29"]<h1><span style="color: #402312;">key</span> takeaways</h1>[/mpc_textblock][/vc_column][/vc_row][vc_row css=".vc_custom_1557324731645{margin-top: -30px !important;border-right-width: 10px !important;border-left-width: 10px !important;border-left-color: #cce0f2 !important;border-left-style: solid !important;border-right-color: #cce0f2 !important;border-right-style: solid !important;}"]';
        foreach ($keyTakeAways as $i => $keyTakeAway) {
            // If even
            if( $i%2 == 0 ) {
                $return .= '[vc_column width="1/2"][mpc_divider preset="mpc_preset_19" align="left" content_type="title" content_position="100" content_border_divider="true" content_border_css="border-bottom:10px;border-color:#cce0f2;border-style:solid;" content_padding_divider="true" content_padding_css="padding-top:5px;padding-right:15px;padding-bottom:5px;padding-left:15px;" font_color="#cce0f2" font_size="16" font_line_height="1" font_transform="uppercase" font_align="center" title="'.$keyTakeAway['key'].'" icon="fa fa-anchor" icon_color="#b077b7" icon_size="30" lines_color="#cce0f2" lines_weight="10" padding_divider="true" margin_divider="true" margin_css="margin-bottom:20px;margin-left:-20px;"][vc_column_text]'.$keyTakeAway['text'].'[/vc_column_text][vc_column_text]<h4>[linktimestamp link=#jumpvideo time='.$keyTakeAway['timestamp'].' color=#402312 icon=fa-youtube-play]Play the rest of part[/linktimestamp]</h4>[/vc_column_text][/vc_column]';
            }
            else {
                $return .= '[vc_column width="1/2"][mpc_divider preset="mpc_preset_19" align="left" content_type="title" content_position="0" content_border_divider="true" content_border_css="border-bottom:10px;border-color:#cce0f2;border-style:solid;" content_padding_divider="true" content_padding_css="padding-top:5px;padding-right:15px;padding-bottom:5px;padding-left:15px;" font_color="#cce0f2" font_size="16" font_line_height="1" font_transform="uppercase" font_align="left" title="'.$keyTakeAway['key'].'" icon="fa fa-anchor" icon_color="#b077b7" icon_size="30" lines_color="#cce0f2" lines_weight="10" padding_divider="true" margin_divider="true" margin_css="margin-top:30px;margin-right:-20px;margin-bottom:20px;"][vc_column_text]'.$keyTakeAway['text'].'[/vc_column_text][vc_column_text]<h4>[linktimestamp link=#jumpvideo time='.$keyTakeAway['timestamp'].' color=#402312 icon=fa-youtube-play]Play the rest of part[/linktimestamp]</h4>[/vc_column_text][/vc_column]';
            }
        }
        $return .= '[/vc_row][vc_row css=".vc_custom_1557327108075{margin-top: -30px !important;border-right-width: 10px !important;border-bottom-width: 10px !important;border-left-width: 10px !important;border-left-color: #cce0f2 !important;border-left-style: solid !important;border-right-color: #cce0f2 !important;border-right-style: solid !important;border-bottom-color: #cce0f2 !important;border-bottom-style: solid !important;}"][vc_column][mpc_divider preset="mpc_preset_29" content_type="icon" content_border_divider="true" content_border_css="border-top:10px;border-right:10px;border-bottom:10px;border-left:10px;border-color:#cce0f2;border-style:solid;border-radius:60px;" content_padding_css="padding:15px;" font_preset="mpc_preset_1" font_color="#a3a3a3" font_size="16" font_line_height="1" font_transform="uppercase" font_align="left" title="ADDONS" icon="eti eti_heart" icon_color="#cce0f2" icon_size="30" lines_color="#cce0f2" lines_weight="10" padding_divider="true" margin_divider="true" margin_css="margin-top:20px;margin-right:-20px;margin-left:-20px;"][vc_row_inner][vc_column_inner width="1/4" css=".vc_custom_1563737562875{margin-bottom: 20px !important;}"][mpc_image image="'.$mpcNextImageId.'" padding_divider="true" margin_divider="true" image_size="100x100" image_opacity="100" image_border_css="border-radius:75px;" image_inner_border_gap="0" effect="none" image_hover_opacity="100"][/vc_column_inner][vc_column_inner width="3/4"][mpc_textblock content_width="100" font_preset="preset_2" '.$thanksFontSize.']'.$thanksText.' '.$linkWithSpan.' . '.$rememberTxt.'[/mpc_textblock][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]';
    }

    if( $id == 23 ) {
       
        $return = '[vc_row enable_top_separator="true" css=".vc_custom_1563696768341{margin-top: -120px !important;}"][vc_column][vc_column_text css=".vc_custom_1563696569710{margin-bottom: 0px !important;}"]<a name="jumpvideo"></a>[/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1564669887174{margin-top: 40px !important;margin-bottom: 0px !important;}"][vc_column][vc_video link='.$youtubeurl.'][/vc_column][/vc_row][vc_row][vc_column][vc_row_inner][vc_column_inner width="1/4" offset="vc_hidden-sm vc_hidden-xs"][mpc_image image="'.$mpcImageId.'" margin_divider="true" margin_css="margin-bottom:30px;" image_opacity="100" image_inner_border_gap="0" effect="none" image_hover_opacity="100" mpc_ribbon__preset="mpc_preset_16" mpc_ribbon__style="fullwidth" mpc_ribbon__corners_color="#4a7c8e" mpc_ribbon__font_preset="mpc_preset_17" mpc_ribbon__font_color="#f7f7f7" mpc_ribbon__font_size="22" mpc_ribbon__font_line_height="1.7" mpc_ribbon__text="key takeaway" mpc_ribbon__background_type="gradient" mpc_ribbon__background_gradient="#402312||#cce0f2||50;50||225||linear" mpc_ribbon__padding_divider="true" mpc_ribbon__padding_css="padding-top:15px;padding-bottom:15px;" mpc_ribbon__margin_divider="true" mpc_ribbon__margin_css="margin-top:180px;"][/vc_column_inner][vc_column_inner width="3/4"][mpc_textblock preset="preset_0" content_width="100" font_preset="mpc_preset_65" font_color="#cce0f2" font_size="35" font_line_height="1" font_align="left" margin_divider="true" mpc_tooltip__disable="true" mpc_tooltip__preset="mpc_preset_29"]<h1><span style="color: #402312;">key</span> takeaways</h1>[/mpc_textblock][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]';
        foreach ($keyTakeAways as $i => $keyTakeAway) {
            // If even
            if( $i%2 == 0 ) {
                $return .= '[vc_row css=".vc_custom_1555865449496{margin-top: -25px !important;}"][vc_column][mpc_divider preset="mpc_preset_19" align="left" content_type="title" content_position="0" content_border_css="border-width:2px;border-color:#cce0f2;border-style:solid;" content_padding_divider="true" content_padding_css="padding-top:5px;padding-right:15px;padding-bottom:5px;padding-left:15px;" font_color="#cce0f2" font_size="16" font_line_height="1" font_transform="uppercase" font_align="left" title="'.$keyTakeAway['key'].'" icon="fa fa-anchor" icon_color="#b077b7" icon_size="30" lines_color="#cce0f2" lines_weight="2" padding_divider="true"][vc_column_text css=".vc_custom_1563808217847{margin-top: 10px !important;}"]'.$keyTakeAway['text'].'[/vc_column_text][vc_column_text css=".vc_custom_1563799748773{margin-top: 10px !important;margin-bottom: 10px !important;}"]<h4>[linktimestamp link=#jumpvideo time='.$keyTakeAway['timestamp'].' color=#402312 icon=fa-youtube-play]Play the rest of part[/linktimestamp]</h4>[/vc_column_text][/vc_column][/vc_row]';
            }
            else {
                $return .= '[vc_row css=".vc_custom_1555865449496{margin-top: -25px !important;}"][vc_column][mpc_divider preset="mpc_preset_20" content_type="title" content_position="100" content_border_css="border-width:2px;border-color:#cce0f2;border-style:solid;" content_padding_divider="true" content_padding_css="padding-top:5px;padding-right:15px;padding-bottom:5px;padding-left:15px;" font_preset="mpc_preset_1" font_color="#cce0f2" font_size="16" font_line_height="1" font_transform="uppercase" font_align="center" title="'.$keyTakeAway['key'].'" icon="fa fa-paint-brush" icon_color="#76bdcc" icon_size="30" lines_color="#cce0f2" lines_weight="2"][vc_column_text css=".vc_custom_1563808228065{margin-top: 10px !important;}"]'.$keyTakeAway['text'].'[/vc_column_text][vc_column_text css=".vc_custom_1563808175828{margin-top: 10px !important;margin-bottom: 10px !important;}"]<h4 style="text-align: right;">[linktimestamp link=#jumpvideo time='.$keyTakeAway['timestamp'].' color=#402312 icon=fa-youtube-play]Play the rest of part[/linktimestamp]</h4>[/vc_column_text][/vc_column][/vc_row]';
            }
        }
        $return .= '[vc_row][vc_column][mpc_divider preset="mpc_preset_29" content_type="icon" content_border_css="border-width:2px;border-color:#cce0f2;border-style:solid;border-radius:60px;" content_padding_css="padding:15px;" font_preset="mpc_preset_1" font_color="#a3a3a3" font_size="16" font_line_height="1" font_transform="uppercase" font_align="left" title="ADDONS" icon="eti eti_heart" icon_color="#cce0f2" icon_size="30" lines_color="#cce0f2" lines_weight="2" padding_divider="true"][vc_row_inner css=".vc_custom_1563726369192{margin-top: 10px !important;}"][vc_column_inner width="1/4" css=".vc_custom_1563726492075{margin-bottom: 20px !important;}"][mpc_image image="'.$mpcNextImageId.'" padding_divider="true" margin_divider="true" image_size="100x100" image_opacity="100" image_border_css="border-radius:75px;" image_inner_border_gap="0" effect="none" image_hover_opacity="100"][/vc_column_inner][vc_column_inner width="3/4"][mpc_textblock content_width="100" font_preset="preset_2" '.$thanksFontSize.']'.$thanksText.' '.$linkWithSpan.' . '.$rememberTxt.'[/mpc_textblock][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]';
    }

    if( $id == 24 ) {
       
        $return = '[vc_row enable_top_separator="true" css=".vc_custom_1563696768341{margin-top: -120px !important;}"][vc_column][vc_column_text css=".vc_custom_1563696569710{margin-bottom: 0px !important;}"]<a name="jumpvideo"></a>[/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1564669961822{margin-top: 60px !important;margin-bottom: 0px !important;}"][vc_column css=".vc_custom_1564669948071{margin-bottom: 0px !important;}"][vc_video link="'.$youtubeurl.'"][/vc_column][/vc_row][vc_row css=".vc_custom_1564670018709{margin-bottom: 0px !important;}"][vc_column preset="mpc_preset_80" content_preset="_mpc_preset_80" css=".vc_custom_1564670037088{margin-bottom: 0px !important;}"][vc_row_inner css=".vc_custom_1564670108164{margin-bottom: 0px !important;}"][vc_column_inner width="1/4" offset="vc_hidden-sm vc_hidden-xs"][mpc_image image="'.$mpcImageId.'" image_opacity="100" image_inner_border_gap="0" effect="none" image_hover_opacity="100" mpc_ribbon__preset="mpc_preset_9" mpc_ribbon__style="corner" mpc_ribbon__alignment="bottom-right" mpc_ribbon__font_preset="mpc_preset_35" mpc_ribbon__font_color="#f7f7f7" mpc_ribbon__font_size="20" mpc_ribbon__font_line_height="1.7" mpc_ribbon__font_transform="uppercase" mpc_ribbon__text="Key takeaways" mpc_ribbon__background_color="#cce0f2" mpc_ribbon__border_divider="true" mpc_ribbon__border_css="border-top:3px;border-right:3px;border-bottom:3px;border-left:3px;border-color:#f7f7f7;border-style:dashed;"][/vc_column_inner][vc_column_inner width="3/4"][mpc_textblock preset="preset_0" content_width="100" font_preset="mpc_preset_38" font_color="#cce0f2" font_size="35" font_line_height="1" font_align="left" mpc_tooltip__disable="true" mpc_tooltip__preset="mpc_preset_29"]<h1><span style="color: #402312;">key</span> takeaways</h1>[/mpc_textblock][mpc_divider lines_color="#cce0f2" lines_weight="5" margin_divider="true" margin_css="margin-top:20px;margin-bottom:20px;"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row][vc_column]';
        $keyTakeAwaysCheckbox = '';
        foreach ($keyTakeAways as $i => $keyTakeAway) {
                      
            // Key take away creator
            $keyTakeAwaysCheckbox .= '<h4><i class="fa fa-check" style="font-size: 22px; color: #cce0f2;"></i> <span style="color: #402312;">'.$keyTakeAway['key'].'</span></h4>';

            // If even
            if( $i%2 == 0 ) {
                $return .= '[mpc_divider preset="mpc_preset_23" align="left" content_type="title" content_position="0" content_border_css="border-width:2px;border-color:#cce0f2;border-style:solid;border-radius:30px;" content_padding_divider="true" content_padding_css="padding-top:5px;padding-right:15px;padding-bottom:5px;padding-left:15px;" font_color="#cce0f2" font_size="16" font_line_height="1" font_transform="uppercase" font_align="left" title="'.$keyTakeAway['key'].'" icon="fa fa-anchor" icon_color="#b077b7" icon_size="30" lines_color="#cce0f2" lines_weight="2" padding_divider="true" margin_divider="true" margin_css="margin-top:20px;margin-bottom:20px;"][vc_column_text]'.$keyTakeAway['text'].'[/vc_column_text][vc_column_text css=".vc_custom_1563807489404{margin-top: 0px !important;margin-bottom: 10px !important;}"]<h4>[linktimestamp link=#jumpvideo time='.$keyTakeAway['timestamp'].' color=#402312 icon=fa-youtube-play]Play the rest of part[/linktimestamp]</h4>[/vc_column_text]';
            }
            else {
                $return .= '[mpc_divider preset="mpc_preset_21" content_type="title" content_position="100" content_border_css="border-width:2px;border-color:#cce0f2;border-style:solid;border-radius:30px;" content_padding_divider="true" content_padding_css="padding-top:5px;padding-right:15px;padding-bottom:5px;padding-left:15px;" font_color="#cce0f2" font_size="16" font_line_height="1" font_transform="uppercase" font_align="left" title="'.$keyTakeAway['key'].'" icon="fa fa-anchor" icon_color="#b077b7" icon_size="30" lines_color="#cce0f2" lines_weight="2" padding_divider="true" margin_divider="true" margin_css="margin-top:20px;margin-bottom:20px;"][vc_column_text css=".vc_custom_1563810661232{margin-bottom: 0px !important;}"]'.$keyTakeAway['text'].'[/vc_column_text][vc_column_text css=".vc_custom_1563807532675{margin-top: 0px !important;margin-bottom: 20px !important;}"]<h4 style="text-align: right;">[linktimestamp link=#jumpvideo time='.$keyTakeAway['timestamp'].' color=#402312 icon=fa-youtube-play]Play the rest of part[/linktimestamp]</h4>[/vc_column_text]';
            }
        }
        $return .= '[mpc_icon_column preset="mpc_preset_42" layout="style_6" alignment="right" background_color="#ffffff" border_css="border-width:2px;border-color:#cce0f2;border-style:solid;border-radius:0px;" padding_css="padding:25px;" title_font_preset="mpc_preset_1" title_font_color="#555555" title_font_size="17" title_font_line_height="1.4" title_font_transform="uppercase" title_font_align="right" title="Key takeways" title_margin_divider="true" title_margin_css="margin-bottom:8px;" content_font_preset="mpc_preset_1" content_font_color="#a5a5a5" content_font_size="14" content_font_line_height="1.5" content_font_align="right" hover_border_css="border-color:#cce0f2;border-radius:0px;" mpc_icon__transition="fade" mpc_icon__icon="etl etl-happy" mpc_icon__icon_color="#402312" mpc_icon__icon_size="30" mpc_icon__background_color="#ffffff" mpc_icon__border_css="border-width:2px;border-color:#402312;border-style:solid;border-radius:0px;" mpc_icon__padding_css="padding:8px;" mpc_icon__margin_divider="true" mpc_icon__margin_css="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:-15px;" mpc_icon__hover_border_css="border-color:#402312;" mpc_divider__disable="true" mpc_divider__width="10" mpc_divider__align="left" mpc_divider__content_padding_divider="true" mpc_divider__content_padding_css="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;" mpc_divider__lines_color="#dddddd" mpc_divider__padding_divider="true" mpc_divider__padding_css="padding-top:3px;padding-bottom:3px;"]'.$keyTakeAwaysCheckbox.'[/mpc_icon_column][/vc_column][/vc_row][vc_row][vc_column width="1/4" css=".vc_custom_1563799691875{margin-bottom: 20px !important;}"][mpc_image image="'.$mpcNextImageId.'" padding_divider="true" margin_divider="true" image_size="100x100" image_opacity="100" image_border_css="border-radius:75px;" image_inner_border_gap="0" effect="none" image_hover_opacity="100"][/vc_column][vc_column width="3/4"][mpc_textblock content_width="100" font_preset="preset_2" '.$thanksFontSize.']'.$thanksText.' '.$linkWithSpan.' . '.$rememberTxt.'[/mpc_textblock][/vc_column][/vc_row]';
    }

    if( $id == 25 ) {
       
        $return = '[vc_row enable_top_separator="true" css=".vc_custom_1563696768341{margin-top: -120px !important;}"][vc_column][vc_column_text css=".vc_custom_1563696569710{margin-bottom: 0px !important;}"]<a name="jumpvideo"></a>[/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1564676601456{margin-top: 60px !important;margin-bottom: 0px !important;}"][vc_column][vc_video link="'.$youtubeurl.'"][/vc_column][/vc_row][vc_row][vc_column][vc_row_inner][vc_column_inner width="1/4" offset="vc_hidden-sm vc_hidden-xs"][mpc_image image="'.$mpcImageId.'" image_opacity="100" image_inner_border_gap="0" effect="none" image_hover_opacity="100" mpc_ribbon__preset="mpc_preset_16" mpc_ribbon__style="fullwidth" mpc_ribbon__corners_color="#4a7c8e" mpc_ribbon__font_preset="mpc_preset_17" mpc_ribbon__font_color="#f7f7f7" mpc_ribbon__font_size="22" mpc_ribbon__font_line_height="1.7" mpc_ribbon__text="key takeaways" mpc_ribbon__background_type="gradient" mpc_ribbon__background_gradient="#402312||#cce0f2||50;50||225||linear" mpc_ribbon__padding_divider="true" mpc_ribbon__padding_css="padding-top:15px;padding-bottom:15px;" mpc_ribbon__margin_divider="true" mpc_ribbon__margin_css="margin-top:180px;"][/vc_column_inner][vc_column_inner width="3/4"][mpc_textblock preset="preset_0" content_width="100" font_preset="preset_2" font_color="#cce0f2" font_size="35" font_line_height="1" font_align="left" mpc_tooltip__disable="true" mpc_tooltip__preset="mpc_preset_29"]<h1><span style="color: #402312;">key</span> takeaways</h1>[/mpc_textblock][mpc_divider lines_color="#cce0f2" lines_weight="5" margin_divider="true" margin_css="margin-top:20px;margin-bottom:20px;"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row][vc_column]';
        $keyTakeAwaysCheckbox = '';
        foreach ($keyTakeAways as $i => $keyTakeAway) {

            // Key take away creator
            $keyTakeAwaysCheckbox .= '<h4><i class="fa fa-check" style="font-size: 22px; color: #cce0f2;"></i> <span style="color: #402312;">'.$keyTakeAway['key'].'</span></h4>';

            // If even
            if( $i%2 == 0 ) {
                $return .= '[mpc_divider content_type="title" content_position="0" content_border_divider="true" content_border_css="border-top:0px;border-right:0px;border-bottom:0px;border-left:10px;border-color:#402312;border-style:solid;border-radius:0px;" content_padding_divider="true" content_padding_css="padding-left:15px;" font_preset="preset_2" font_color="#515151" font_size="18" font_line_height="1.2" font_transform="uppercase" font_align="left" title="'.$keyTakeAway['key'].'" icon="eti eti_lock-open_alt" icon_color="#fea580" icon_size="24" lines_color="#cce0f2" lines_weight="20" padding_divider="true" padding_css="padding-bottom:10px;" margin_divider="true" margin_css="margin-top:20px;margin-bottom:20px;"][vc_column_text css=".vc_custom_1563810621459{margin-bottom: 0px !important;}"]'.$keyTakeAway['text'].'[/vc_column_text][vc_column_text css=".vc_custom_1563810575361{margin-top: 10px !important;margin-bottom: 10px !important;}"]<h4>[linktimestamp link=#jumpvideo time='.$keyTakeAway['timestamp'].' color=#402312 icon=fa-youtube-play]Play the rest of part[/linktimestamp]</h4>[/vc_column_text]';
            }
            else {
                $return .= '[mpc_divider content_type="title" content_position="100" content_border_divider="true" content_border_css="border-top:0px;border-right:10px;border-bottom:0px;border-left:0px;border-color:#402312;border-style:solid;border-radius:0px;" content_padding_divider="true" content_padding_css="padding-right:15px;" font_preset="preset_2" font_color="#515151" font_size="18" font_line_height="1.2" font_transform="uppercase" font_align="right" title="'.$keyTakeAway['key'].'" icon="eti eti_lock-open_alt" icon_color="#fea580" icon_size="24" lines_color="#cce0f2" lines_weight="20" padding_divider="true" padding_css="padding-bottom:10px;" margin_divider="true" margin_css="margin-top:20px;margin-bottom:20px;"][vc_column_text css=".vc_custom_1563810602249{margin-bottom: 0px !important;}"]'.$keyTakeAway['text'].'[/vc_column_text][vc_column_text css=".vc_custom_1563809048804{margin-top: 10px !important;margin-bottom: 10px !important;}"]<h4 style="text-align: right;">[linktimestamp link=#jumpvideo time='.$keyTakeAway['timestamp'].' color=#402312 icon=fa-youtube-play]Play the rest of part[/linktimestamp]</h4>[/vc_column_text]';
            }
        }
        $return .= '[mpc_icon_column preset="mpc_preset_42" layout="style_2" background_color="#ffffff" border_css="border-width:2px;border-color:#cce0f2;border-style:solid;border-radius:0px;" padding_css="padding:25px;" margin_divider="true" margin_css="margin-top:40px;" title_font_preset="preset_2" title_font_color="#555555" title_font_size="17" title_font_line_height="1.4" title_font_transform="uppercase" title_font_align="left" title="Key takeways" title_margin_divider="true" title_margin_css="margin-bottom:8px;" content_font_preset="mpc_preset_1" content_font_color="#a5a5a5" content_font_size="14" content_font_line_height="1.5" content_font_align="left" hover_border_css="border-color:#cce0f2;border-radius:0px;" mpc_icon__transition="fade" mpc_icon__icon="etl etl-heart" mpc_icon__icon_color="#402312" mpc_icon__icon_size="30" mpc_icon__background_color="#ffffff" mpc_icon__border_css="border-width:2px;border-color:#402312;border-style:solid;border-radius:0px;" mpc_icon__padding_css="padding:8px;" mpc_icon__margin_divider="true" mpc_icon__margin_css="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:-15px;" mpc_icon__hover_border_css="border-color:#402312;" mpc_divider__disable="true" mpc_divider__width="10" mpc_divider__align="left" mpc_divider__content_padding_divider="true" mpc_divider__content_padding_css="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;" mpc_divider__lines_color="#dddddd" mpc_divider__padding_divider="true" mpc_divider__padding_css="padding-top:3px;padding-bottom:3px;"]'.$keyTakeAwaysCheckbox.'[/mpc_icon_column][/vc_column][/vc_row][vc_row][vc_column width="1/4" css=".vc_custom_1563799691875{margin-bottom: 20px !important;}"][mpc_image image="'.$mpcNextImageId.'" padding_divider="true" margin_divider="true" image_size="100x100" image_opacity="100" image_border_css="border-radius:75px;" image_inner_border_gap="0" effect="none" image_hover_opacity="100"][/vc_column][vc_column width="3/4"][mpc_textblock content_width="100" font_preset="preset_2" '.$thanksFontSize.']'.$thanksText.' '.$linkWithSpan.' . '.$rememberTxt.'[/mpc_textblock][/vc_column][/vc_row]';
    }

    if( $id == 26 ) {
       
        $return = '[vc_row enable_top_separator="true" css=".vc_custom_1563696768341{margin-top: -120px !important;}"][vc_column][vc_column_text css=".vc_custom_1563696569710{margin-bottom: 0px !important;}"]<a name="jumpvideo"></a>[/vc_column_text][vc_empty_space height="30px"][/vc_column][/vc_row][vc_row css=".vc_custom_1563737488396{border-top-width: 10px !important;border-right-width: 10px !important;border-left-width: 10px !important;border-left-color: #cdcbce !important;border-left-style: solid !important;border-right-color: #cdcbce !important;border-right-style: solid !important;border-top-color: #cdcbce !important;border-top-style: solid !important;}"][vc_column css=".vc_custom_1563737525425{margin-top: 20px !important;}"][vc_video link="'.$youtubeurl.'"][mpc_textblock preset="preset_0" content_width="100" font_preset="mpc_preset_65" font_color="#cdcbce" font_size="35" font_line_height="1" font_align="left" margin_divider="true" margin_css="margin-bottom:20px;" mpc_tooltip__disable="true" mpc_tooltip__preset="mpc_preset_29"]<h1><span style="color: #402312;">key</span> takeaways</h1>[/mpc_textblock][/vc_column][/vc_row][vc_row css=".vc_custom_1557324731645{margin-top: -30px !important;border-right-width: 10px !important;border-left-width: 10px !important;border-left-color: #cdcbce !important;border-left-style: solid !important;border-right-color: #cdcbce !important;border-right-style: solid !important;}"]';
        foreach ($keyTakeAways as $i => $keyTakeAway) {
            // If even
            if( $i%2 == 0 ) {
                $return .= '[vc_column width="1/2"][mpc_divider preset="mpc_preset_19" align="left" content_type="title" content_position="100" content_border_divider="true" content_border_css="border-bottom:10px;border-color:#cdcbce;border-style:solid;" content_padding_divider="true" content_padding_css="padding-top:5px;padding-right:15px;padding-bottom:5px;padding-left:15px;" font_color="#cdcbce" font_size="16" font_line_height="1" font_transform="uppercase" font_align="center" title="'.$keyTakeAway['key'].'" icon="fa fa-anchor" icon_color="#b077b7" icon_size="30" lines_color="#cdcbce" lines_weight="10" padding_divider="true" margin_divider="true" margin_css="margin-bottom:20px;margin-left:-20px;"][vc_column_text]'.$keyTakeAway['text'].'[/vc_column_text][vc_column_text]<h4>[linktimestamp link=#jumpvideo time='.$keyTakeAway['timestamp'].' color=#402312 icon=fa-youtube-play]Play the rest of part[/linktimestamp]</h4>[/vc_column_text][/vc_column]';
            }
            else {
                $return .= '[vc_column width="1/2"][mpc_divider preset="mpc_preset_19" align="left" content_type="title" content_position="0" content_border_divider="true" content_border_css="border-bottom:10px;border-color:#cdcbce;border-style:solid;" content_padding_divider="true" content_padding_css="padding-top:5px;padding-right:15px;padding-bottom:5px;padding-left:15px;" font_color="#cdcbce" font_size="16" font_line_height="1" font_transform="uppercase" font_align="left" title="'.$keyTakeAway['key'].'" icon="fa fa-anchor" icon_color="#b077b7" icon_size="30" lines_color="#cdcbce" lines_weight="10" padding_divider="true" margin_divider="true" margin_css="margin-top:30px;margin-right:-20px;margin-bottom:20px;"][vc_column_text]'.$keyTakeAway['text'].'[/vc_column_text][vc_column_text]<h4>[linktimestamp link=#jumpvideo time='.$keyTakeAway['timestamp'].' color=#402312 icon=fa-youtube-play]Play the rest of part[/linktimestamp]</h4>[/vc_column_text][/vc_column]';
            }
        }
        $return .= '[/vc_row][vc_row css=".vc_custom_1557327108075{margin-top: -30px !important;border-right-width: 10px !important;border-bottom-width: 10px !important;border-left-width: 10px !important;border-left-color: #cdcbce !important;border-left-style: solid !important;border-right-color: #cdcbce !important;border-right-style: solid !important;border-bottom-color: #cdcbce !important;border-bottom-style: solid !important;}"][vc_column][mpc_divider preset="mpc_preset_29" content_type="icon" content_border_divider="true" content_border_css="border-top:10px;border-right:10px;border-bottom:10px;border-left:10px;border-color:#cdcbce;border-style:solid;border-radius:60px;" content_padding_css="padding:15px;" font_preset="mpc_preset_1" font_color="#a3a3a3" font_size="16" font_line_height="1" font_transform="uppercase" font_align="left" title="ADDONS" icon="eti eti_heart" icon_color="#cdcbce" icon_size="30" lines_color="#cdcbce" lines_weight="10" padding_divider="true" margin_divider="true" margin_css="margin-top:20px;margin-right:-20px;margin-left:-20px;"][vc_row_inner][vc_column_inner width="1/4" css=".vc_custom_1563737562875{margin-bottom: 20px !important;}"][mpc_image image="'.$mpcNextImageId.'" padding_divider="true" margin_divider="true" image_size="100x100" image_opacity="100" image_border_css="border-radius:75px;" image_inner_border_gap="0" effect="none" image_hover_opacity="100"][/vc_column_inner][vc_column_inner width="3/4"][mpc_textblock content_width="100" font_preset="preset_2" '.$thanksFontSize.']'.$thanksText.' '.$linkWithSpan.' . '.$rememberTxt.'[/mpc_textblock][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]';
    }

    if( $id == 27 ) {
       
        $return = '[vc_row enable_top_separator="true" css=".vc_custom_1563696768341{margin-top: -120px !important;}"][vc_column][vc_column_text css=".vc_custom_1563696569710{margin-bottom: 0px !important;}"]<a name="jumpvideo"></a>[/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1564669887174{margin-top: 40px !important;margin-bottom: 0px !important;}"][vc_column][vc_video link="'.$youtubeurl.'"][/vc_column][/vc_row][vc_row][vc_column][vc_row_inner][vc_column_inner width="1/4" offset="vc_hidden-sm vc_hidden-xs"][mpc_image image="'.$mpcImageId.'" margin_divider="true" margin_css="margin-bottom:30px;" image_opacity="100" image_inner_border_gap="0" effect="none" image_hover_opacity="100" mpc_ribbon__preset="mpc_preset_16" mpc_ribbon__style="fullwidth" mpc_ribbon__corners_color="#4a7c8e" mpc_ribbon__font_preset="mpc_preset_17" mpc_ribbon__font_color="#f7f7f7" mpc_ribbon__font_size="22" mpc_ribbon__font_line_height="1.7" mpc_ribbon__text="key takeaway" mpc_ribbon__background_type="gradient" mpc_ribbon__background_gradient="#402312||#cdcbce||50;50||225||linear" mpc_ribbon__padding_divider="true" mpc_ribbon__padding_css="padding-top:15px;padding-bottom:15px;" mpc_ribbon__margin_divider="true" mpc_ribbon__margin_css="margin-top:180px;"][/vc_column_inner][vc_column_inner width="3/4"][mpc_textblock preset="preset_0" content_width="100" font_preset="mpc_preset_65" font_color="#cdcbce" font_size="35" font_line_height="1" font_align="left" margin_divider="true" mpc_tooltip__disable="true" mpc_tooltip__preset="mpc_preset_29"]<h1><span style="color: #402312;">key</span> takeaways</h1>[/mpc_textblock][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]';
        foreach ($keyTakeAways as $i => $keyTakeAway) {
            // If even
            if( $i%2 == 0 ) {
                $return .= '[vc_row css=".vc_custom_1555865449496{margin-top: -25px !important;}"][vc_column][mpc_divider preset="mpc_preset_19" align="left" content_type="title" content_position="0" content_border_css="border-width:2px;border-color:#cdcbce;border-style:solid;" content_padding_divider="true" content_padding_css="padding-top:5px;padding-right:15px;padding-bottom:5px;padding-left:15px;" font_color="#cdcbce" font_size="16" font_line_height="1" font_transform="uppercase" font_align="left" title="'.$keyTakeAway['key'].'" icon="fa fa-anchor" icon_color="#b077b7" icon_size="30" lines_color="#cdcbce" lines_weight="2" padding_divider="true"][vc_column_text css=".vc_custom_1563808217847{margin-top: 10px !important;}"]'.$keyTakeAway['text'].'[/vc_column_text][vc_column_text css=".vc_custom_1563799748773{margin-top: 10px !important;margin-bottom: 10px !important;}"]<h4>[linktimestamp link=#jumpvideo time='.$keyTakeAway['timestamp'].' color=#402312 icon=fa-youtube-play]Play the rest of part[/linktimestamp]</h4>[/vc_column_text][/vc_column][/vc_row]';
            }
            else {
                $return .= '[vc_row css=".vc_custom_1555865449496{margin-top: -25px !important;}"][vc_column][mpc_divider preset="mpc_preset_20" content_type="title" content_position="100" content_border_css="border-width:2px;border-color:#cdcbce;border-style:solid;" content_padding_divider="true" content_padding_css="padding-top:5px;padding-right:15px;padding-bottom:5px;padding-left:15px;" font_preset="mpc_preset_1" font_color="#cdcbce" font_size="16" font_line_height="1" font_transform="uppercase" font_align="center" title="'.$keyTakeAway['key'].'" icon="fa fa-paint-brush" icon_color="#76bdcc" icon_size="30" lines_color="#cdcbce" lines_weight="2"][vc_column_text css=".vc_custom_1563808228065{margin-top: 10px !important;}"]'.$keyTakeAway['text'].'[/vc_column_text][vc_column_text css=".vc_custom_1563808175828{margin-top: 10px !important;margin-bottom: 10px !important;}"]<h4 style="text-align: right;">[linktimestamp link=#jumpvideo time='.$keyTakeAway['timestamp'].' color=#402312 icon=fa-youtube-play]Play the rest of part[/linktimestamp]</h4>[/vc_column_text][/vc_column][/vc_row]';
            }
        }
        $return .= '[vc_row][vc_column][mpc_divider preset="mpc_preset_29" content_type="icon" content_border_css="border-width:2px;border-color:#cdcbce;border-style:solid;border-radius:60px;" content_padding_css="padding:15px;" font_preset="mpc_preset_1" font_color="#a3a3a3" font_size="16" font_line_height="1" font_transform="uppercase" font_align="left" title="ADDONS" icon="eti eti_heart" icon_color="#cdcbce" icon_size="30" lines_color="#cdcbce" lines_weight="2" padding_divider="true"][vc_row_inner css=".vc_custom_1563726369192{margin-top: 10px !important;}"][vc_column_inner width="1/4" css=".vc_custom_1563726492075{margin-bottom: 20px !important;}"][mpc_image image="'.$mpcNextImageId.'" padding_divider="true" margin_divider="true" image_size="100x100" image_opacity="100" image_border_css="border-radius:75px;" image_inner_border_gap="0" effect="none" image_hover_opacity="100"][/vc_column_inner][vc_column_inner width="3/4"][mpc_textblock content_width="100" font_preset="preset_2" '.$thanksFontSize.']'.$thanksText.' '.$linkWithSpan.' . '.$rememberTxt.'[/mpc_textblock][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]';
    }

    if( $id == 28 ) {
       
        $return = '[vc_row enable_top_separator="true" css=".vc_custom_1563696768341{margin-top: -120px !important;}"][vc_column][vc_column_text css=".vc_custom_1563696569710{margin-bottom: 0px !important;}"]<a name="jumpvideo"></a>[/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1564669961822{margin-top: 60px !important;margin-bottom: 0px !important;}"][vc_column css=".vc_custom_1564669948071{margin-bottom: 0px !important;}"][vc_video link="'.$youtubeurl.'"][/vc_column][/vc_row][vc_row css=".vc_custom_1564670018709{margin-bottom: 0px !important;}"][vc_column preset="mpc_preset_80" content_preset="_mpc_preset_80" css=".vc_custom_1564670037088{margin-bottom: 0px !important;}"][vc_row_inner css=".vc_custom_1564670108164{margin-bottom: 0px !important;}"][vc_column_inner width="1/4" offset="vc_hidden-sm vc_hidden-xs"][mpc_image image="'.$mpcImageId.'" image_opacity="100" image_inner_border_gap="0" effect="none" image_hover_opacity="100" mpc_ribbon__preset="mpc_preset_9" mpc_ribbon__style="corner" mpc_ribbon__alignment="bottom-right" mpc_ribbon__font_preset="mpc_preset_35" mpc_ribbon__font_color="#f7f7f7" mpc_ribbon__font_size="20" mpc_ribbon__font_line_height="1.7" mpc_ribbon__font_transform="uppercase" mpc_ribbon__text="Key takeaways" mpc_ribbon__background_color="#cdcbce" mpc_ribbon__border_divider="true" mpc_ribbon__border_css="border-top:3px;border-right:3px;border-bottom:3px;border-left:3px;border-color:#f7f7f7;border-style:dashed;"][/vc_column_inner][vc_column_inner width="3/4"][mpc_textblock preset="preset_0" content_width="100" font_preset="mpc_preset_38" font_color="#cdcbce" font_size="35" font_line_height="1" font_align="left" mpc_tooltip__disable="true" mpc_tooltip__preset="mpc_preset_29"]<h1><span style="color: #402312;">key</span> takeaways</h1>[/mpc_textblock][mpc_divider lines_color="#cdcbce" lines_weight="5" margin_divider="true" margin_css="margin-top:20px;margin-bottom:20px;"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row][vc_column]';
        $keyTakeAwaysCheckbox = '';
        foreach ($keyTakeAways as $i => $keyTakeAway) {

            // Key take away creator
            $keyTakeAwaysCheckbox .= '<h4><i class="fa fa-check" style="font-size: 22px; color: #cdcbce;"></i> <span style="color: #402312;">402312;">'.$keyTakeAway['key'].'</span></h4>';

            // If even
            if( $i%2 == 0 ) {
                $return .= '[mpc_divider preset="mpc_preset_23" align="left" content_type="title" content_position="0" content_border_css="border-width:2px;border-color:#cdcbce;border-style:solid;border-radius:30px;" content_padding_divider="true" content_padding_css="padding-top:5px;padding-right:15px;padding-bottom:5px;padding-left:15px;" font_color="#cdcbce" font_size="16" font_line_height="1" font_transform="uppercase" font_align="left" title="'.$keyTakeAway['key'].'" icon="fa fa-anchor" icon_color="#b077b7" icon_size="30" lines_color="#cdcbce" lines_weight="2" padding_divider="true" margin_divider="true" margin_css="margin-top:20px;margin-bottom:20px;"][vc_column_text]'.$keyTakeAway['text'].'[/vc_column_text][vc_column_text css=".vc_custom_1563807489404{margin-top: 0px !important;margin-bottom: 10px !important;}"]<h4>[linktimestamp link=#jumpvideo time='.$keyTakeAway['timestamp'].' color=#402312 icon=fa-youtube-play]Play the rest of part[/linktimestamp]</h4>[/vc_column_text]';
            }
            else {
                $return .= '[mpc_divider preset="mpc_preset_21" content_type="title" content_position="100" content_border_css="border-width:2px;border-color:#cdcbce;border-style:solid;border-radius:30px;" content_padding_divider="true" content_padding_css="padding-top:5px;padding-right:15px;padding-bottom:5px;padding-left:15px;" font_color="#cdcbce" font_size="16" font_line_height="1" font_transform="uppercase" font_align="left" title="'.$keyTakeAway['key'].'" icon="fa fa-anchor" icon_color="#b077b7" icon_size="30" lines_color="#cdcbce" lines_weight="2" padding_divider="true" margin_divider="true" margin_css="margin-top:20px;margin-bottom:20px;"][vc_column_text css=".vc_custom_1563810661232{margin-bottom: 0px !important;}"]'.$keyTakeAway['text'].'[/vc_column_text][vc_column_text css=".vc_custom_1563807532675{margin-top: 0px !important;margin-bottom: 20px !important;}"]<h4 style="text-align: right;">[linktimestamp link=#jumpvideo time='.$keyTakeAway['timestamp'].' color=#402312 icon=fa-youtube-play]Play the rest of part[/linktimestamp]</h4>[/vc_column_text]';
            }
        }
        $return .= '[mpc_icon_column preset="mpc_preset_42" layout="style_6" alignment="right" background_color="#ffffff" border_css="border-width:2px;border-color:#cdcbce;border-style:solid;border-radius:0px;" padding_css="padding:25px;" title_font_preset="mpc_preset_1" title_font_color="#555555" title_font_size="17" title_font_line_height="1.4" title_font_transform="uppercase" title_font_align="right" title="Key takeways" title_margin_divider="true" title_margin_css="margin-bottom:8px;" content_font_preset="mpc_preset_1" content_font_color="#a5a5a5" content_font_size="14" content_font_line_height="1.5" content_font_align="right" hover_border_css="border-color:#cdcbce;border-radius:0px;" mpc_icon__transition="fade" mpc_icon__icon="etl etl-happy" mpc_icon__icon_color="#402312" mpc_icon__icon_size="30" mpc_icon__background_color="#ffffff" mpc_icon__border_css="border-width:2px;border-color:#402312;border-style:solid;border-radius:0px;" mpc_icon__padding_css="padding:8px;" mpc_icon__margin_divider="true" mpc_icon__margin_css="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:-15px;" mpc_icon__hover_border_css="border-color:#402312;" mpc_divider__disable="true" mpc_divider__width="10" mpc_divider__align="left" mpc_divider__content_padding_divider="true" mpc_divider__content_padding_css="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;" mpc_divider__lines_color="#dddddd" mpc_divider__padding_divider="true" mpc_divider__padding_css="padding-top:3px;padding-bottom:3px;"]'.$keyTakeAwaysCheckbox.'[/mpc_icon_column][/vc_column][/vc_row][vc_row][vc_column width="1/4" css=".vc_custom_1563799691875{margin-bottom: 20px !important;}"][mpc_image image="'.$mpcNextImageId.'" padding_divider="true" margin_divider="true" image_size="100x100" image_opacity="100" image_border_css="border-radius:75px;" image_inner_border_gap="0" effect="none" image_hover_opacity="100"][/vc_column][vc_column width="3/4"][mpc_textblock content_width="100" font_preset="preset_2" '.$thanksFontSize.']'.$thanksText.' '.$linkWithSpan.' . '.$rememberTxt.'[/mpc_textblock][/vc_column][/vc_row]';
    }

    if( $id == 29 ) {
       
        $return = '[vc_row enable_top_separator="true" css=".vc_custom_1563696768341{margin-top: -120px !important;}"][vc_column][vc_column_text css=".vc_custom_1563696569710{margin-bottom: 0px !important;}"]<a name="jumpvideo"></a>[/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1564676663096{margin-top: 60px !important;margin-bottom: 0px !important;}"][vc_column][vc_video link="'.$youtubeurl.'"][/vc_column][/vc_row][vc_row][vc_column][vc_row_inner][vc_column_inner width="1/4" offset="vc_hidden-sm vc_hidden-xs"][mpc_image image="'.$mpcImageId.'" image_opacity="100" image_inner_border_gap="0" effect="none" image_hover_opacity="100" mpc_ribbon__preset="mpc_preset_16" mpc_ribbon__style="fullwidth" mpc_ribbon__corners_color="#4a7c8e" mpc_ribbon__font_preset="mpc_preset_17" mpc_ribbon__font_color="#f7f7f7" mpc_ribbon__font_size="22" mpc_ribbon__font_line_height="1.7" mpc_ribbon__text="key takeaways" mpc_ribbon__background_type="gradient" mpc_ribbon__background_gradient="#402312||#cdcbce||50;50||225||linear" mpc_ribbon__padding_divider="true" mpc_ribbon__padding_css="padding-top:15px;padding-bottom:15px;" mpc_ribbon__margin_divider="true" mpc_ribbon__margin_css="margin-top:180px;"][/vc_column_inner][vc_column_inner width="3/4"][mpc_textblock preset="preset_0" content_width="100" font_preset="preset_2" font_color="#cdcbce" font_size="35" font_line_height="1" font_align="left" mpc_tooltip__disable="true" mpc_tooltip__preset="mpc_preset_29"]<h1><span style="color: #402312;">key</span> takeaways</h1>[/mpc_textblock][mpc_divider lines_color="#cdcbce" lines_weight="5" margin_divider="true" margin_css="margin-top:20px;margin-bottom:20px;"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row][vc_column]';
        $keyTakeAwaysCheckbox = '';
        foreach ($keyTakeAways as $i => $keyTakeAway) {

            // Key take away creator
            $keyTakeAwaysCheckbox .= '<h4><i class="fa fa-check" style="font-size: 22px; color: #cdcbce;"></i> <span style="color: #402312;">'.$keyTakeAway['key'].'</span></h4>';

            // If even
            if( $i%2 == 0 ) {
                $return .= '[mpc_divider content_type="title" content_position="0" content_border_divider="true" content_border_css="border-top:0px;border-right:0px;border-bottom:0px;border-left:10px;border-color:#402312;border-style:solid;border-radius:0px;" content_padding_divider="true" content_padding_css="padding-left:15px;" font_preset="preset_2" font_color="#515151" font_size="18" font_line_height="1.2" font_transform="uppercase" font_align="left" title="'.$keyTakeAway['key'].'" icon="eti eti_lock-open_alt" icon_color="#fea580" icon_size="24" lines_color="#cdcbce" lines_weight="20" padding_divider="true" padding_css="padding-bottom:10px;" margin_divider="true" margin_css="margin-top:20px;margin-bottom:20px;"][vc_column_text css=".vc_custom_1563810621459{margin-bottom: 0px !important;}"]'.$keyTakeAway['text'].'[/vc_column_text][vc_column_text css=".vc_custom_1563810575361{margin-top: 10px !important;margin-bottom: 10px !important;}"]<h4>[linktimestamp link=#jumpvideo time='.$keyTakeAway['timestamp'].' color=#402312 icon=fa-youtube-play]Play the rest of part[/linktimestamp]</h4>[/vc_column_text]';
            }
            else {
                $return .= '[mpc_divider content_type="title" content_position="100" content_border_divider="true" content_border_css="border-top:0px;border-right:10px;border-bottom:0px;border-left:0px;border-color:#402312;border-style:solid;border-radius:0px;" content_padding_divider="true" content_padding_css="padding-right:15px;" font_preset="preset_2" font_color="#515151" font_size="18" font_line_height="1.2" font_transform="uppercase" font_align="right" title="'.$keyTakeAway['key'].'" icon="eti eti_lock-open_alt" icon_color="#fea580" icon_size="24" lines_color="#cdcbce" lines_weight="20" padding_divider="true" padding_css="padding-bottom:10px;" margin_divider="true" margin_css="margin-top:20px;margin-bottom:20px;"][vc_column_text css=".vc_custom_1563810602249{margin-bottom: 0px !important;}"]'.$keyTakeAway['text'].'[/vc_column_text][vc_column_text css=".vc_custom_1563809048804{margin-top: 10px !important;margin-bottom: 10px !important;}"]<h4 style="text-align: right;">[linktimestamp link=#jumpvideo time='.$keyTakeAway['timestamp'].' color=#402312 icon=fa-youtube-play]Play the rest of part[/linktimestamp]</h4>[/vc_column_text]';
            }
        }
        $return .= '[mpc_icon_column preset="mpc_preset_42" layout="style_2" background_color="#ffffff" border_css="border-width:2px;border-color:#cdcbce;border-style:solid;border-radius:0px;" padding_css="padding:25px;" margin_divider="true" margin_css="margin-top:40px;" title_font_preset="preset_2" title_font_color="#555555" title_font_size="17" title_font_line_height="1.4" title_font_transform="uppercase" title_font_align="left" title="Key takeways" title_margin_divider="true" title_margin_css="margin-bottom:8px;" content_font_preset="mpc_preset_1" content_font_color="#a5a5a5" content_font_size="14" content_font_line_height="1.5" content_font_align="left" hover_border_css="border-color:#cdcbce;border-radius:0px;" mpc_icon__transition="fade" mpc_icon__icon="etl etl-heart" mpc_icon__icon_color="#402312" mpc_icon__icon_size="30" mpc_icon__background_color="#ffffff" mpc_icon__border_css="border-width:2px;border-color:#402312;border-style:solid;border-radius:0px;" mpc_icon__padding_css="padding:8px;" mpc_icon__margin_divider="true" mpc_icon__margin_css="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:-15px;" mpc_icon__hover_border_css="border-color:#402312;" mpc_divider__disable="true" mpc_divider__width="10" mpc_divider__align="left" mpc_divider__content_padding_divider="true" mpc_divider__content_padding_css="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;" mpc_divider__lines_color="#dddddd" mpc_divider__padding_divider="true" mpc_divider__padding_css="padding-top:3px;padding-bottom:3px;"]'.$keyTakeAwaysCheckbox.'[/mpc_icon_column][/vc_column][/vc_row]';
    }

    if( $id == 30 ) {
       
        $return = '[vc_row enable_top_separator="true" css=".vc_custom_1563696768341{margin-top: -120px !important;}"][vc_column][vc_column_text css=".vc_custom_1563696569710{margin-bottom: 0px !important;}"]<a name="jumpvideo"></a>[/vc_column_text][vc_empty_space height="30px"][/vc_column][/vc_row][vc_row css=".vc_custom_1563737488396{border-top-width: 10px !important;border-right-width: 10px !important;border-left-width: 10px !important;border-left-color: #cea791 !important;border-left-style: solid !important;border-right-color: #cea791 !important;border-right-style: solid !important;border-top-color: #cea791 !important;border-top-style: solid !important;}"][vc_column css=".vc_custom_1563737525425{margin-top: 20px !important;}"][vc_video link="'.$youtubeurl.'"][mpc_textblock preset="preset_0" content_width="100" font_preset="mpc_preset_65" font_color="#cea791" font_size="35" font_line_height="1" font_align="left" margin_divider="true" margin_css="margin-bottom:20px;" mpc_tooltip__disable="true" mpc_tooltip__preset="mpc_preset_29"]<h1><span style="color: #402312;">key</span> takeaways</h1>[/mpc_textblock][/vc_column][/vc_row][vc_row css=".vc_custom_1557324731645{margin-top: -30px !important;border-right-width: 10px !important;border-left-width: 10px !important;border-left-color: #cea791 !important;border-left-style: solid !important;border-right-color: #cea791 !important;border-right-style: solid !important;}"]';
        foreach ($keyTakeAways as $i => $keyTakeAway) {
            // If even
            if( $i%2 == 0 ) {
                $return .= '[vc_column width="1/2"][mpc_divider preset="mpc_preset_19" align="left" content_type="title" content_position="100" content_border_divider="true" content_border_css="border-bottom:10px;border-color:#cea791;border-style:solid;" content_padding_divider="true" content_padding_css="padding-top:5px;padding-right:15px;padding-bottom:5px;padding-left:15px;" font_color="#cea791" font_size="16" font_line_height="1" font_transform="uppercase" font_align="center" title="'.$keyTakeAway['key'].'" icon="fa fa-anchor" icon_color="#b077b7" icon_size="30" lines_color="#cea791" lines_weight="10" padding_divider="true" margin_divider="true" margin_css="margin-bottom:20px;margin-left:-20px;"][vc_column_text]'.$keyTakeAway['text'].'[/vc_column_text][vc_column_text]<h4>[linktimestamp link=#jumpvideo time='.$keyTakeAway['timestamp'].' color=#402312 icon=fa-youtube-play]Play the rest of part[/linktimestamp]</h4>[/vc_column_text][/vc_column]';
            }
            else {
                $return .= '[vc_column width="1/2"][mpc_divider preset="mpc_preset_19" align="left" content_type="title" content_position="0" content_border_divider="true" content_border_css="border-bottom:10px;border-color:#cea791;border-style:solid;" content_padding_divider="true" content_padding_css="padding-top:5px;padding-right:15px;padding-bottom:5px;padding-left:15px;" font_color="#cea791" font_size="16" font_line_height="1" font_transform="uppercase" font_align="left" title="'.$keyTakeAway['key'].'" icon="fa fa-anchor" icon_color="#b077b7" icon_size="30" lines_color="#cea791" lines_weight="10" padding_divider="true" margin_divider="true" margin_css="margin-top:30px;margin-right:-20px;margin-bottom:20px;"][vc_column_text]'.$keyTakeAway['text'].'[/vc_column_text][vc_column_text]<h4>[linktimestamp link=#jumpvideo time='.$keyTakeAway['timestamp'].' color=#402312 icon=fa-youtube-play]Play the rest of part[/linktimestamp]</h4>[/vc_column_text][/vc_column]';
            }
        }
        $return .= '[/vc_row][vc_row css=".vc_custom_1557327108075{margin-top: -30px !important;border-right-width: 10px !important;border-bottom-width: 10px !important;border-left-width: 10px !important;border-left-color: #cea791 !important;border-left-style: solid !important;border-right-color: #cea791 !important;border-right-style: solid !important;border-bottom-color: #cea791 !important;border-bottom-style: solid !important;}"][vc_column][mpc_divider preset="mpc_preset_29" content_type="icon" content_border_divider="true" content_border_css="border-top:10px;border-right:10px;border-bottom:10px;border-left:10px;border-color:#cea791;border-style:solid;border-radius:60px;" content_padding_css="padding:15px;" font_preset="mpc_preset_1" font_color="#a3a3a3" font_size="16" font_line_height="1" font_transform="uppercase" font_align="left" title="ADDONS" icon="eti eti_heart" icon_color="#cea791" icon_size="30" lines_color="#cea791" lines_weight="10" padding_divider="true" margin_divider="true" margin_css="margin-top:20px;margin-right:-20px;margin-left:-20px;"][vc_row_inner][vc_column_inner width="1/4" css=".vc_custom_1563737562875{margin-bottom: 20px !important;}"][mpc_image image="'.$mpcNextImageId.'" padding_divider="true" margin_divider="true" image_size="100x100" image_opacity="100" image_border_css="border-radius:75px;" image_inner_border_gap="0" effect="none" image_hover_opacity="100"][/vc_column_inner][vc_column_inner width="3/4"][mpc_textblock content_width="100" font_preset="preset_2" '.$thanksFontSize.']'.$thanksText.' '.$linkWithSpan.' . '.$rememberTxt.'[/mpc_textblock][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]';
    }

    if( $id == 31 ) {
       
        $return = '[vc_row enable_top_separator="true" css=".vc_custom_1563696768341{margin-top: -120px !important;}"][vc_column][vc_column_text css=".vc_custom_1563696569710{margin-bottom: 0px !important;}"]<a name="jumpvideo"></a>[/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1564669887174{margin-top: 40px !important;margin-bottom: 0px !important;}"][vc_column][vc_video link="'.$youtubeurl.'"][/vc_column][/vc_row][vc_row][vc_column][vc_row_inner][vc_column_inner width="1/4" offset="vc_hidden-sm vc_hidden-xs"][mpc_image image="'.$mpcImageId.'" margin_divider="true" margin_css="margin-bottom:30px;" image_opacity="100" image_inner_border_gap="0" effect="none" image_hover_opacity="100" mpc_ribbon__preset="mpc_preset_16" mpc_ribbon__style="fullwidth" mpc_ribbon__corners_color="#4a7c8e" mpc_ribbon__font_preset="mpc_preset_17" mpc_ribbon__font_color="#f7f7f7" mpc_ribbon__font_size="22" mpc_ribbon__font_line_height="1.7" mpc_ribbon__text="key takeaway" mpc_ribbon__background_type="gradient" mpc_ribbon__background_gradient="#402312||#cea791||50;50||225||linear" mpc_ribbon__padding_divider="true" mpc_ribbon__padding_css="padding-top:15px;padding-bottom:15px;" mpc_ribbon__margin_divider="true" mpc_ribbon__margin_css="margin-top:180px;"][/vc_column_inner][vc_column_inner width="3/4"][mpc_textblock preset="preset_0" content_width="100" font_preset="mpc_preset_65" font_color="#cea791" font_size="35" font_line_height="1" font_align="left" margin_divider="true" mpc_tooltip__disable="true" mpc_tooltip__preset="mpc_preset_29"]<h1><span style="color: #402312;">key</span> takeaways</h1>[/mpc_textblock][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]';
        foreach ($keyTakeAways as $i => $keyTakeAway) {
            // If even
            if( $i%2 == 0 ) {
                $return .= '[vc_row css=".vc_custom_1555865449496{margin-top: -25px !important;}"][vc_column][mpc_divider preset="mpc_preset_19" align="left" content_type="title" content_position="0" content_border_css="border-width:2px;border-color:#cea791;border-style:solid;" content_padding_divider="true" content_padding_css="padding-top:5px;padding-right:15px;padding-bottom:5px;padding-left:15px;" font_color="#cea791" font_size="16" font_line_height="1" font_transform="uppercase" font_align="left" title="'.$keyTakeAway['key'].'" icon="fa fa-anchor" icon_color="#b077b7" icon_size="30" lines_color="#cea791" lines_weight="2" padding_divider="true"][vc_column_text css=".vc_custom_1563808217847{margin-top: 10px !important;}"]'.$keyTakeAway['text'].'[/vc_column_text][vc_column_text css=".vc_custom_1563799748773{margin-top: 10px !important;margin-bottom: 10px !important;}"]<h4>[linktimestamp link=#jumpvideo time='.$keyTakeAway['timestamp'].' color=#402312 icon=fa-youtube-play]Play the rest of part[/linktimestamp]</h4>[/vc_column_text][/vc_column][/vc_row]';
            }
            else {
                $return .= '[vc_row css=".vc_custom_1555865449496{margin-top: -25px !important;}"][vc_column][mpc_divider preset="mpc_preset_20" content_type="title" content_position="100" content_border_css="border-width:2px;border-color:#cea791;border-style:solid;" content_padding_divider="true" content_padding_css="padding-top:5px;padding-right:15px;padding-bottom:5px;padding-left:15px;" font_preset="mpc_preset_1" font_color="#cea791" font_size="16" font_line_height="1" font_transform="uppercase" font_align="center" title="'.$keyTakeAway['key'].'" icon="fa fa-paint-brush" icon_color="#76bdcc" icon_size="30" lines_color="#cea791" lines_weight="2"][vc_column_text css=".vc_custom_1563808228065{margin-top: 10px !important;}"]'.$keyTakeAway['text'].'[/vc_column_text][vc_column_text css=".vc_custom_1563808175828{margin-top: 10px !important;margin-bottom: 10px !important;}"]<h4 style="text-align: right;">[linktimestamp link=#jumpvideo time='.$keyTakeAway['timestamp'].' color=#402312 icon=fa-youtube-play]Play the rest of part[/linktimestamp]</h4>[/vc_column_text][/vc_column][/vc_row]';
            }
        }
        $return .= '[vc_row][vc_column][mpc_divider preset="mpc_preset_29" content_type="icon" content_border_css="border-width:2px;border-color:#cea791;border-style:solid;border-radius:60px;" content_padding_css="padding:15px;" font_preset="mpc_preset_1" font_color="#a3a3a3" font_size="16" font_line_height="1" font_transform="uppercase" font_align="left" title="ADDONS" icon="eti eti_heart" icon_color="#cea791" icon_size="30" lines_color="#cea791" lines_weight="2" padding_divider="true"][vc_row_inner css=".vc_custom_1563726369192{margin-top: 10px !important;}"][vc_column_inner width="1/4" css=".vc_custom_1563726492075{margin-bottom: 20px !important;}"][mpc_image image="'.$mpcNextImageId.'" padding_divider="true" margin_divider="true" image_size="100x100" image_opacity="100" image_border_css="border-radius:75px;" image_inner_border_gap="0" effect="none" image_hover_opacity="100"][/vc_column_inner][vc_column_inner width="3/4"][mpc_textblock content_width="100" font_preset="preset_2" '.$thanksFontSize.']'.$thanksText.' '.$linkWithSpan.' . '.$rememberTxt.'[/mpc_textblock][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]';
    }

    if( $id == 32 ) {
       
        $return = '[vc_row enable_top_separator="true" css=".vc_custom_1563696768341{margin-top: -120px !important;}"][vc_column][vc_column_text css=".vc_custom_1563696569710{margin-bottom: 0px !important;}"]<a name="jumpvideo"></a>[/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1564669961822{margin-top: 60px !important;margin-bottom: 0px !important;}"][vc_column css=".vc_custom_1564669948071{margin-bottom: 0px !important;}"][vc_video link="'.$youtubeurl.'"][/vc_column][/vc_row][vc_row css=".vc_custom_1564670018709{margin-bottom: 0px !important;}"][vc_column preset="mpc_preset_80" content_preset="_mpc_preset_80" css=".vc_custom_1564670037088{margin-bottom: 0px !important;}"][vc_row_inner css=".vc_custom_1564670108164{margin-bottom: 0px !important;}"][vc_column_inner width="1/4" offset="vc_hidden-sm vc_hidden-xs"][mpc_image image="'.$mpcImageId.'" image_opacity="100" image_inner_border_gap="0" effect="none" image_hover_opacity="100" mpc_ribbon__preset="mpc_preset_9" mpc_ribbon__style="corner" mpc_ribbon__alignment="bottom-right" mpc_ribbon__font_preset="mpc_preset_35" mpc_ribbon__font_color="#f7f7f7" mpc_ribbon__font_size="20" mpc_ribbon__font_line_height="1.7" mpc_ribbon__font_transform="uppercase" mpc_ribbon__text="Key takeaways" mpc_ribbon__background_color="#cea791" mpc_ribbon__border_divider="true" mpc_ribbon__border_css="border-top:3px;border-right:3px;border-bottom:3px;border-left:3px;border-color:#f7f7f7;border-style:dashed;"][/vc_column_inner][vc_column_inner width="3/4"][mpc_textblock preset="preset_0" content_width="100" font_preset="mpc_preset_38" font_color="#cea791" font_size="35" font_line_height="1" font_align="left" mpc_tooltip__disable="true" mpc_tooltip__preset="mpc_preset_29"]<h1><span style="color: #402312;">key</span> takeaways</h1>[/mpc_textblock][mpc_divider lines_color="#cea791" lines_weight="5" margin_divider="true" margin_css="margin-top:20px;margin-bottom:20px;"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row][vc_column]';
        $keyTakeAwaysCheckbox = '';
        foreach ($keyTakeAways as $i => $keyTakeAway) {

            // Key take away creator
            $keyTakeAwaysCheckbox .= '<h4><i class="fa fa-check" style="font-size: 22px; color: #cea791;"></i> <span style="color: #402312;">'.$keyTakeAway['key'].'</span></h4>';

            // If even
            if( $i%2 == 0 ) {
                $return .= '[mpc_divider preset="mpc_preset_23" align="left" content_type="title" content_position="0" content_border_css="border-width:2px;border-color:#cea791;border-style:solid;border-radius:30px;" content_padding_divider="true" content_padding_css="padding-top:5px;padding-right:15px;padding-bottom:5px;padding-left:15px;" font_color="#cea791" font_size="16" font_line_height="1" font_transform="uppercase" font_align="left" title="'.$keyTakeAway['key'].'" icon="fa fa-anchor" icon_color="#b077b7" icon_size="30" lines_color="#cea791" lines_weight="2" padding_divider="true" margin_divider="true" margin_css="margin-top:20px;margin-bottom:20px;"][vc_column_text]'.$keyTakeAway['text'].'[/vc_column_text][vc_column_text css=".vc_custom_1563807489404{margin-top: 0px !important;margin-bottom: 10px !important;}"]<h4>[linktimestamp link=#jumpvideo time='.$keyTakeAway['timestamp'].' color=#402312 icon=fa-youtube-play]Play the rest of part[/linktimestamp]</h4>[/vc_column_text]';
            }
            else {
                $return .= '[mpc_divider preset="mpc_preset_21" content_type="title" content_position="100" content_border_css="border-width:2px;border-color:#cea791;border-style:solid;border-radius:30px;" content_padding_divider="true" content_padding_css="padding-top:5px;padding-right:15px;padding-bottom:5px;padding-left:15px;" font_color="#cea791" font_size="16" font_line_height="1" font_transform="uppercase" font_align="left" title="'.$keyTakeAway['key'].'" icon="fa fa-anchor" icon_color="#b077b7" icon_size="30" lines_color="#cea791" lines_weight="2" padding_divider="true" margin_divider="true" margin_css="margin-top:20px;margin-bottom:20px;"][vc_column_text css=".vc_custom_1563810661232{margin-bottom: 0px !important;}"]'.$keyTakeAway['text'].'[/vc_column_text][vc_column_text css=".vc_custom_1563807532675{margin-top: 0px !important;margin-bottom: 20px !important;}"]<h4 style="text-align: right;">[linktimestamp link=#jumpvideo time='.$keyTakeAway['timestamp'].' color=#402312 icon=fa-youtube-play]Play the rest of part[/linktimestamp]</h4>[/vc_column_text]';
            }
        }
        $return .= '[mpc_icon_column preset="mpc_preset_42" layout="style_6" alignment="right" background_color="#ffffff" border_css="border-width:2px;border-color:#cea791;border-style:solid;border-radius:0px;" padding_css="padding:25px;" title_font_preset="mpc_preset_1" title_font_color="#555555" title_font_size="17" title_font_line_height="1.4" title_font_transform="uppercase" title_font_align="right" title="Key takeways" title_margin_divider="true" title_margin_css="margin-bottom:8px;" content_font_preset="mpc_preset_1" content_font_color="#a5a5a5" content_font_size="14" content_font_line_height="1.5" content_font_align="right" hover_border_css="border-color:#cea791;border-radius:0px;" mpc_icon__transition="fade" mpc_icon__icon="etl etl-happy" mpc_icon__icon_color="#402312" mpc_icon__icon_size="30" mpc_icon__background_color="#ffffff" mpc_icon__border_css="border-width:2px;border-color:#402312;border-style:solid;border-radius:0px;" mpc_icon__padding_css="padding:8px;" mpc_icon__margin_divider="true" mpc_icon__margin_css="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:-15px;" mpc_icon__hover_border_css="border-color:#402312;" mpc_divider__disable="true" mpc_divider__width="10" mpc_divider__align="left" mpc_divider__content_padding_divider="true" mpc_divider__content_padding_css="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;" mpc_divider__lines_color="#dddddd" mpc_divider__padding_divider="true" mpc_divider__padding_css="padding-top:3px;padding-bottom:3px;"]'.$keyTakeAwaysCheckbox.'[/mpc_icon_column][/vc_column][/vc_row][vc_row][vc_column width="1/4" css=".vc_custom_1563799691875{margin-bottom: 20px !important;}"][mpc_image image="'.$mpcNextImageId.'" padding_divider="true" margin_divider="true" image_size="100x100" image_opacity="100" image_border_css="border-radius:75px;" image_inner_border_gap="0" effect="none" image_hover_opacity="100"][/vc_column][vc_column width="3/4"][mpc_textblock content_width="100" font_preset="preset_2" '.$thanksFontSize.']'.$thanksText.' '.$linkWithSpan.' . '.$rememberTxt.'[/mpc_textblock][/vc_column][/vc_row]';
    }

    if( $id == 33 ) {
       
        $return = '[vc_row enable_top_separator="true" css=".vc_custom_1563696768341{margin-top: -120px !important;}"][vc_column][vc_column_text css=".vc_custom_1563696569710{margin-bottom: 0px !important;}"]<a name="jumpvideo"></a>[/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1564676632015{margin-top: 60px !important;margin-bottom: 0px !important;}"][vc_column][vc_video link="'.$youtubeurl.'"][/vc_column][/vc_row][vc_row][vc_column][vc_row_inner][vc_column_inner width="1/4" offset="vc_hidden-sm vc_hidden-xs"][mpc_image image="'.$mpcImageId.'" image_opacity="100" image_inner_border_gap="0" effect="none" image_hover_opacity="100" mpc_ribbon__preset="mpc_preset_16" mpc_ribbon__style="fullwidth" mpc_ribbon__corners_color="#4a7c8e" mpc_ribbon__font_preset="mpc_preset_17" mpc_ribbon__font_color="#f7f7f7" mpc_ribbon__font_size="22" mpc_ribbon__font_line_height="1.7" mpc_ribbon__text="key takeaways" mpc_ribbon__background_type="gradient" mpc_ribbon__background_gradient="#402312||#cea791||50;50||225||linear" mpc_ribbon__padding_divider="true" mpc_ribbon__padding_css="padding-top:15px;padding-bottom:15px;" mpc_ribbon__margin_divider="true" mpc_ribbon__margin_css="margin-top:180px;"][/vc_column_inner][vc_column_inner width="3/4"][mpc_textblock preset="preset_0" content_width="100" font_preset="preset_2" font_color="#cea791" font_size="35" font_line_height="1" font_align="left" mpc_tooltip__disable="true" mpc_tooltip__preset="mpc_preset_29"]<h1><span style="color: #402312;">key</span> takeaways</h1>[/mpc_textblock][mpc_divider lines_color="#cea791" lines_weight="5" margin_divider="true" margin_css="margin-top:20px;margin-bottom:20px;"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row][vc_column]';
        $keyTakeAwaysCheckbox = '';
        foreach ($keyTakeAways as $i => $keyTakeAway) {

            // Key take away creator
            $keyTakeAwaysCheckbox .= '<h4><i class="fa fa-check" style="font-size: 22px; color: #cea791;"></i> <span style="color: #402312;">'.$keyTakeAway['key'].'</span></h4>';

            // If even
            if( $i%2 == 0 ) {
                $return .= '[mpc_divider content_type="title" content_position="0" content_border_divider="true" content_border_css="border-top:0px;border-right:0px;border-bottom:0px;border-left:10px;border-color:#402312;border-style:solid;border-radius:0px;" content_padding_divider="true" content_padding_css="padding-left:15px;" font_preset="preset_2" font_color="#515151" font_size="18" font_line_height="1.2" font_transform="uppercase" font_align="left" title="'.$keyTakeAway['key'].'" icon="eti eti_lock-open_alt" icon_color="#fea580" icon_size="24" lines_color="#cea791" lines_weight="20" padding_divider="true" padding_css="padding-bottom:10px;" margin_divider="true" margin_css="margin-top:20px;margin-bottom:20px;"][vc_column_text css=".vc_custom_1563810621459{margin-bottom: 0px !important;}"]'.$keyTakeAway['text'].'[/vc_column_text][vc_column_text css=".vc_custom_1563810575361{margin-top: 10px !important;margin-bottom: 10px !important;}"]<h4>[linktimestamp link=#jumpvideo time='.$keyTakeAway['timestamp'].' color=#402312 icon=fa-youtube-play]Play the rest of part[/linktimestamp]</h4>[/vc_column_text]';
            }
            else {
                $return .= '[mpc_divider content_type="title" content_position="100" content_border_divider="true" content_border_css="border-top:0px;border-right:10px;border-bottom:0px;border-left:0px;border-color:#402312;border-style:solid;border-radius:0px;" content_padding_divider="true" content_padding_css="padding-right:15px;" font_preset="preset_2" font_color="#515151" font_size="18" font_line_height="1.2" font_transform="uppercase" font_align="right" title="'.$keyTakeAway['key'].'" icon="eti eti_lock-open_alt" icon_color="#fea580" icon_size="24" lines_color="#cea791" lines_weight="20" padding_divider="true" padding_css="padding-bottom:10px;" margin_divider="true" margin_css="margin-top:20px;margin-bottom:20px;"][vc_column_text css=".vc_custom_1563810602249{margin-bottom: 0px !important;}"]'.$keyTakeAway['text'].'[/vc_column_text][vc_column_text css=".vc_custom_1563809048804{margin-top: 10px !important;margin-bottom: 10px !important;}"]<h4 style="text-align: right;">[linktimestamp link=#jumpvideo time='.$keyTakeAway['timestamp'].' color=#402312 icon=fa-youtube-play]Play the rest of part[/linktimestamp]</h4>[/vc_column_text]';
            }
        }
        $return .= '[mpc_icon_column preset="mpc_preset_42" layout="style_2" background_color="#ffffff" border_css="border-width:2px;border-color:#cea791;border-style:solid;border-radius:0px;" padding_css="padding:25px;" margin_divider="true" margin_css="margin-top:40px;" title_font_preset="preset_2" title_font_color="#555555" title_font_size="17" title_font_line_height="1.4" title_font_transform="uppercase" title_font_align="left" title="Key takeways" title_margin_divider="true" title_margin_css="margin-bottom:8px;" content_font_preset="mpc_preset_1" content_font_color="#a5a5a5" content_font_size="14" content_font_line_height="1.5" content_font_align="left" hover_border_css="border-color:#cea791;border-radius:0px;" mpc_icon__transition="fade" mpc_icon__icon="etl etl-heart" mpc_icon__icon_color="#402312" mpc_icon__icon_size="30" mpc_icon__background_color="#ffffff" mpc_icon__border_css="border-width:2px;border-color:#402312;border-style:solid;border-radius:0px;" mpc_icon__padding_css="padding:8px;" mpc_icon__margin_divider="true" mpc_icon__margin_css="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:-15px;" mpc_icon__hover_border_css="border-color:#402312;" mpc_divider__disable="true" mpc_divider__width="10" mpc_divider__align="left" mpc_divider__content_padding_divider="true" mpc_divider__content_padding_css="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;" mpc_divider__lines_color="#dddddd" mpc_divider__padding_divider="true" mpc_divider__padding_css="padding-top:3px;padding-bottom:3px;"]'.$keyTakeAwaysCheckbox.'[/mpc_icon_column][/vc_column][/vc_row][vc_row][vc_column width="1/4" css=".vc_custom_1563799691875{margin-bottom: 20px !important;}"][mpc_image image="'.$mpcNextImageId.'" padding_divider="true" margin_divider="true" image_size="100x100" image_opacity="100" image_border_css="border-radius:75px;" image_inner_border_gap="0" effect="none" image_hover_opacity="100"][/vc_column][vc_column width="3/4"][mpc_textblock content_width="100" font_preset="preset_2" '.$thanksFontSize.']'.$thanksText.' '.$linkWithSpan.' . '.$rememberTxt.'[/mpc_textblock][/vc_column][/vc_row]';
    }

    return $return;    

}
?>