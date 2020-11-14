<?php
if(!(isset($widget['list_items']) && !empty($widget['list_items']))) {
    $widget['list_items'] = [
        [
            'name' => 'Visa Kỹ Năng Đặc Định Nhật Bản Và Những Điều Cần Biết',
            'description' => 'Từ tháng 4/2019, chính phủ Nhật Bản sẽ bổ sung thêm 1 loại visa khác dành cho người nước ngoài với tên gọi là visa kỹ năng đặc định (visa tokutei ginou – 特定技能).',
            'icon' => '/img/tokuteiginou-300x229-1.png',
            'url_link' => '#'
        ],

        [
            'name' => 'Giáo Trình Học Tiếng Nhật Cho Người Mới Bắt Đầu 2020',
            'description' => 'Giáo trình học tiếng Nhật cho người mới bắt đầu khác nhau, Phổ biến nhất, được đưa vào giảng dạy nhiều nhất trên thế giới cũng như là Việt Nam hiện nay là giáo trình Minano Nihongo.',
            'icon' => '/img/cap-do-tieng-nhat-jlpt.png',
            'url_link' => '#'
        ],

        [
            'name' => '5 Thủ Tục “Khắc Cốt Ghi Tâm” Khi Đi XKLĐ Nhật Bản Năm 2020',
            'description' => 'Với nền công nghiệp phát triển, Nhật Bản hiện là nước có tỉ lệ xuất khẩu lao động Việt Nam cao nhất nhì thế giới.',
            'icon' => '/img/5-thu-tuc-khac-cot-ghi-tam-khi-xuat-khau-lao-dong-nhat-5.jpg',
            'url_link' => '#'
        ],

        [
            'name' => 'Bí Kíp Học Kanji Hiệu Quả Của Học Sinh Nhật Bản',
            'description' => 'Kanji (chữ Hán) luôn là nỗi đau đầu của nhiều bạn trẻ học tiếng Nhật vì khó học. Bài viết này sẽ giúp các bạn có cái nhìn tham khảo về cách học Kanji hiệu quả nhé!',
            'icon' => '/img/kanji.jpg',
            'url_link' => '#'
        ],

    ];                                        
}
?>
<section class="elementor-section elementor-top-section elementor-element elementor-element-398f0ad1 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=398f0ad1 data-element_type=section data-settings={&quot;background_background&quot;:&quot;gradient&quot;}>
    <div class="elementor-container elementor-column-gap-default">
        <div class=elementor-row>
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-575480b1" data-id=575480b1 data-element_type=column>
                <div class="elementor-column-wrap elementor-element-populated">
                    <div class=elementor-widget-wrap>
                        <div class="elementor-element elementor-element-641aa992 elementor-widget elementor-widget-heading" data-id=641aa992 data-element_type=widget data-widget_type=heading.default>
                            <div class=elementor-widget-container><h2 class="elementor-heading-title elementor-size-default"><?=uh($widget['name'])?></h2></div>
                        </div>
                        <div class="elementor-element elementor-element-5d04c4f5 elementor-grid-4 elementor-grid-mobile-2 elementor-grid-tablet-2 elementor-posts--thumbnail-top elementor-widget elementor-widget-posts" data-id=5d04c4f5 data-element_type=widget data-settings={&quot;classic_columns&quot;:&quot;4&quot;,&quot;classic_columns_mobile&quot;:&quot;2&quot;,&quot;classic_row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:15,&quot;sizes&quot;:[]},&quot;classic_columns_tablet&quot;:&quot;2&quot;} data-widget_type=posts.classic>
                            <div class=elementor-widget-container>
                                <div class="elementor-posts-container elementor-posts elementor-posts--skin-classic elementor-grid">
                                    <?php
                                    if(isset($widget['list_items']) && !empty($widget['list_items'])) {
                                        foreach($widget['list_items'] as $v2){
                                            echo '<article class="elementor-post elementor-grid-item post type-post status-publish format-standard has-post-thumbnail hentry">
                                                <a class=elementor-post__thumbnail__link href="'.$v2['url_link'].'" >
                                                    <div class=elementor-post__thumbnail><img src="'.$v2['icon'].'" title="'.$v2['name'].'" alt="'.$v2['name'].'"></div>
                                                </a>
                                                <div class=elementor-post__text>
                                                    <h3 class="elementor-post__title"><a href="'.$v2['url_link'].'">'.uh($v2['name']).'</a></h3>
                                                    <div class=elementor-post__excerpt>
                                                        <p>'.uh($v2['description']).'</p>
                                                    </div>
                                                </div>
                                            </article>';
                                        }
                                    }
                                    ?>                                                                                                            
                                </div>
                            </div>
                        </div>
                        
                        <div class="elementor-element elementor-element-59027bfd elementor-align-center elementor-widget elementor-widget-button" data-id=59027bfd data-element_type=widget data-widget_type=button.default>
                            <div class=elementor-widget-container>
                                <div class=elementor-button-wrapper>
                                    <a href="<?=($widget['url_link'])?>" class="elementor-button-link elementor-button elementor-size-sm" role=button>
                                        <span class=elementor-button-content-wrapper>
                                            <span class=elementor-button-text>Xem thêm</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>