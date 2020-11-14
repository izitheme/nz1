<div class="elementor elementor-1641">
    <div class=elementor-inner>
        <div class=elementor-section-wrap>        
<?php 
$this->renderPartial('slider');


$widgets = Yii::$app->f->getWidgets('index');

if(!(isset($widgets['data']) && !empty($widgets['data']))){
    $widgets = [
        'code' => 'index',
        'name' => 'Widget module trang chủ',        
        'data' => [
            ['name' => 'Dịch vụ của chúng tôi', 'layout' => 'index_s1'],
            ['name' => 'Đếm số lượng TTS', 'layout' => 'index_s2'],
            [
                'name' => 'Tại sao bạn nên chọn NozomiJAPAN', 'layout' => 'index_s3',
                'description' => 'Mở rộng cánh cửa bay tới Nhật Bản'
            ],

            [
                'name' => 'NozomiJAPAN và các hoạt động của thực tập sinh', 'layout' => 'index_s4',
                'description' => 'Những khoảnh khắc đáng nhớ tại Nhật Bản'
            ],

            [
                'name' => 'Sứ mệnh của Nozomijapan là giúp bạn đến Nhật Bản với hành trang vững chắc nhất', 
                'layout' => 'index_s5',
                'icon' => '/img/nozomi-black-white.jpg',
                'description' => 'Sứ mệnh của Nozomijapan là giúp bạn đến Nhật Bản <br>với hành trang vững chắc nhất'
            ],

            [
                'name' => 'Đăng ký nhận quà tặng', 
                'layout' => 'index_s6',
                'icon' => '/img/nozomi-black-white.jpg',
                'description' => 'Sứ mệnh của Nozomijapan là giúp bạn đến Nhật Bản <br>với hành trang vững chắc nhất'
            ],
            [
                'name' => 'Tư vấn học tiếng nhật và xuất khẩu lao động nhật bản', 
                'layout' => 'index_s7',
                'icon' => '/img/nozomi-black-white.jpg',
                'description' => 'Sứ mệnh của Nozomijapan là giúp bạn đến Nhật Bản <br>với hành trang vững chắc nhất',
                'url_link' => '#',
            ],

            [
                'name' => 'Báo chí nói về Nozomijapan', 
                'layout' => 'index_s8',
                'icon' => '/img/nozomi-black-white.jpg',
                'description' => 'Sứ mệnh của Nozomijapan là giúp bạn đến Nhật Bản <br>với hành trang vững chắc nhất',
                'url_link' => '#',
            ],
            
        ],
    ];
}

if((isset($widgets['data']) && !empty($widgets['data']))){
    foreach($widgets['data'] as $widget){
        $fp = dirname(__DIR__) . '/partials/' . $widget['layout'] . '.php';
        if(file_exists($fp)){
            $this->renderPartial( $widget['layout'], ['widget' => $widget]);
        }
    }

}

?>
</div>
</div>
</div>