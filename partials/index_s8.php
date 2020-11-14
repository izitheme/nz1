<?php
if(!(isset($widget['list_items']) && !empty($widget['list_items']))) {
    $widget['list_items'] = [
        [
            'name' => 'Visa Kỹ Năng Đặc Định Nhật Bản Và Những Điều Cần Biết',
            'description' => 'Từ tháng 4/2019, chính phủ Nhật Bản sẽ bổ sung thêm 1 loại visa khác dành cho người nước ngoài với tên gọi là visa kỹ năng đặc định (visa tokutei ginou – 特定技能).',
            'icon' => '/img/cap-do-tieng-nhat-jlpt.png',
            'icon2' => '/img/dt2.jpg', 
            'url_link' => '#',
            'background' => '#1a7901'
        ],

        [
            'name' => 'Giáo Trình Học Tiếng Nhật Cho Người Mới Bắt Đầu 2020',
            'description' => 'Giáo trình học tiếng Nhật cho người mới bắt đầu khác nhau, Phổ biến nhất, được đưa vào giảng dạy nhiều nhất trên thế giới cũng như là Việt Nam hiện nay là giáo trình Minano Nihongo.',
            'icon' => '/img/cap-do-tieng-nhat-jlpt.png',
            'icon2' => '/img/k14.png',
            'url_link' => '#',
            'background' => '#ff6d18'
        ],

        [
            'name' => '5 Thủ Tục “Khắc Cốt Ghi Tâm” Khi Đi XKLĐ Nhật Bản Năm 2020',
            'description' => 'Với nền công nghiệp phát triển, Nhật Bản hiện là nước có tỉ lệ xuất khẩu lao động Việt Nam cao nhất nhì thế giới.',
            'icon' => '/img/cap-do-tieng-nhat-jlpt.png',
            'icon2' => '/img/24h.png',
            'url_link' => '#',
            'background' => '#78b43d'
        ],

        [
            'name' => 'Bí Kíp Học Kanji Hiệu Quả Của Học Sinh Nhật Bản',
            'description' => 'Kanji (chữ Hán) luôn là nỗi đau đầu của nhiều bạn trẻ học tiếng Nhật vì khó học. Bài viết này sẽ giúp các bạn có cái nhìn tham khảo về cách học Kanji hiệu quả nhé!',
            'icon' => '/img/cap-do-tieng-nhat-jlpt.png',
            'icon2' => '/img/dspl.png',
            'url_link' => '#',
            'background' => '#0b6097'
        ],

    ];                                        
}
?>

<section class="elementor-section elementor-top-section elementor-element elementor-element-5bb5a4c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=5bb5a4c data-element_type=section>
    <div class="elementor-container elementor-column-gap-default">
        <div class=elementor-row>
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b8896f4" data-id=b8896f4 data-element_type=column>
                <div class="elementor-column-wrap elementor-element-populated">
                    <div class=elementor-widget-wrap>
                        <div class="elementor-element elementor-element-d3e5465 elementor-widget elementor-widget-template" data-id=d3e5465 data-element_type=widget data-widget_type=template.default>
                            <div class=elementor-widget-container>
                                <div class=elementor-template>
                                    <div data-elementor-type=section data-elementor-id=3955 class="elementor elementor-3955" data-elementor-settings=[]>
                                        <div class=elementor-section-wrap>
                                            <section class="elementor-section elementor-top-section elementor-element elementor-element-85d4b08 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=85d4b08 data-element_type=section>
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class=elementor-row>
                                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-fa2976e" data-id=fa2976e data-element_type=column>
                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                <div class=elementor-widget-wrap>
                                                                    <div class="elementor-element elementor-element-83fff5f elementor-widget elementor-widget-heading" data-id=83fff5f data-element_type=widget data-widget_type=heading.default>
                                                                        <div class=elementor-widget-container><h2 class="elementor-heading-title elementor-size-default"><?=uh($widget['name'])?></h2></div>
                                                                    </div>
                                                                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-811869f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=811869f data-element_type=section>
                                                                        <div class="elementor-container elementor-column-gap-default">
                                                                            <div class=elementor-row>
                                                                                <?php
                                                                                if(isset($widget['list_items']) && !empty($widget['list_items'])) {
                                                                                    foreach($widget['list_items'] as $v2){
                                                                                        echo '<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-4c96dc9" data-id=4c96dc9 data-element_type=column>
                                                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                                                <div class=elementor-widget-wrap>
                                                                                                    <div class="elementor-element elementor-element-0b40718 elementor-widget elementor-widget-image" data-id=0b40718 data-element_type=widget data-widget_type=image.default>
                                                                                                        <div class="elementor-widget-container" style="background-color:'.$v2['background'].'">
                                                                                                            <div class=elementor-image>
                                                                                                                <img src="'.$v2['icon2'].'" title="'.uh($v2['name']).'" alt="'.uh($v2['name']).'">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="elementor-element elementor-element-c7411d0 elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id=c7411d0 data-element_type=widget data-widget_type=image-box.default>
                                                                                                        <div class=elementor-widget-container>
                                                                                                            <div class=elementor-image-box-wrapper>
                                                                                                                <figure class=elementor-image-box-img>
                                                                                                                    <a href="'.$v2['url_link'].'" target=_blank rel="nofollow noopener">
                                                                                                                        <img width=600 height=338 src="'.$v2['icon'].'" class="attachment-full size-full" alt="'.uh($v2['name']).'" loading=lazy sizes="(max-width: 600px) 100vw, 600px" title="'.uh($v2['name']).'">
                                                                                                                    </a>
                                                                                                                </figure>
                                                                                                                <div class=elementor-image-box-content>
                                                                                                                    <h3 class="elementor-image-box-title">
                                                                                                                        <a href="'.$v2['url_link'].'" target=_blank rel="nofollow noopener">'.uh($v2['name']).'</a>
                                                                                                                    </h3>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>';
                                                                                    }
                                                                                }
                                                                                ?>    
                                                                                
                                                                                
                                                                                
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </section>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>