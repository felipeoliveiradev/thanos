<?php
//VARIAVEIS

$animationDuractionDefault = 3000;

global $animationDuractionDefault;

class Component
{

    public function __construct($nameComponent, $type, $page)
    {

        include get_template_directory() . "/components/$nameComponent/$type/$page.php";
    }
}

class importComponent
{

    public function __construct($nameComponent, $type, $page)
    {

        include get_template_directory() . "/components/$nameComponent/$type/$page.php";
    }
}

class Setup
{
    public function __construct($path)
    {
        require_once get_template_directory() . "/$path/setup.php";
    }
}

class Components
{
    public function __construct($nameComponent, $file = null)
    {
        if (empty($file)) {
            get_template_part("components/$nameComponent/frontend/view");
        } else {
            get_template_part("components/$nameComponent/frontend/$file");
        }
    }
}

class SettingsComponent
{
    public function __construct()
    {
        get_template_directory() . "/components/setup.php";
    }

}

class Settings
{
    public function __construct($path)
    {
        require get_template_directory() . "/settings/$path/setup.php";

    }
}

class SettingsSetup
{
    public function __construct($page)
    {
        include get_template_directory() . "/settings/setup/$page.php";

    }
}

class RequirementsSettings
{
    public function __construct($path)
    {
        require get_template_directory() . "/settings/requirements/$path/setup.php";
    }
}
class RequirementsWoocommerce
{
    public function __construct($path)
    {
        require get_template_directory() . "/settings/woocommerce/$path/setup.php";
    }
}
class Title
{
    public function __construct($small, $title)
    {
        $plugins = new Plugin();

        ?>


<div class='row'>
    <div class='homeTitle' <?php $plugins->animation();?>>
        <small>
            <?php echo $small ?></small>
        <h1>
            <?php echo $title ?>
        </h1>
        <hr />
    </div>
</div>

<?php
}
}

class Plugin
{
    public function flipCard($page=null, $image=null, $icon, $title, $subtitle, $text, $typeAnimation = null, $animationDuraction = null)
    {
        $plugins = new Plugin();
        include get_template_directory() . "/components/plugins/cards/flip/frontend/view.php";

    }

    public function animation($type = null, $duration = null)
    {
        $cases = array($type, $duration);
        switch ($cases) {
            case empty($cases[0]):
                $type = "fade-up";

            case empty($cases[1]):
                $duration = "800";

        }
        echo "
        data-aos='$type'
        data-aos-duration='$duration'
        data-aos-easing='ease-in-sine'
        ";

    }

    public function stores($image, $title, $subtitle, $text, $imageWidth = null, $imageHeight = null, $animation = null, $animationnType = null, $animationDuraction = null)
    {
        $cases = array($image, $title, $subtitle, $text, $imageWidth, $imageHeight, $animation, $animationnType, $animationDuraction);

        $images = new Image();

        foreach ($cases as $key => $val) {

            $result[$key] = $val;

        }

        include get_template_directory() . "/components/plugins/stores/frontend/view.php";

    }
    public function fixedCard($page=null, $link, $image, $title, $imageWidth = null, $imageHeight = null, $imagePositionX = null, $imagePositonY = null, $typeAnimation = null, $duractionAnimate = null)
    {
        $plugins = new Plugin();

        $cases = array($typeAnimation, $duractionAnimate);
        foreach ($cases as $a) {
            /*
            switch ($a) {
                case empty(1):
                    $typeAnimation = 'flip-left';
                    break;
                case empty(1):
                    $duractionAnimate = '';
                    break;
                case empty(1 && 2):
                    $typeAnimation = 'flip-left';
                    $duractionAnimate = '';
                    break;
            }
            */
            }

        include get_template_directory() . "/components/plugins/cards/fixedCard/frontend/view.php";

    }

    public function gallerySlide($image, $title, $imageWidth, $imageHeight, $imagePositionX, $imagePositonY)
    {

        include get_template_directory() . "/components/plugins/sliders/gallery/frontend/view.php";

    }

    public function ourStore($image, $title, $imageWidth, $imageHeight, $imagePositionX, $imagePositonY)
    {

        include get_template_directory() . "/components/plugins/sliders/gallery/frontend/view.php";

    }

}

class Image
{

    public function line($image, $imageWidth = null, $imageHeight = null, $animation = null, $animationType = null, $animationDuraction = null)
    {
        $cases = array($imageWidth, $imageHeight, $animation);

        switch ($cases) {

            case empty($cases[0]):
                $imageWidth = '21';

            case empty($cases[1]):
                $imageHeight = '15';

            case empty($cases[0]):
                $animation = 'no';

        }

        $varImagem = array($image, $imageWidth, $imageHeight, $animation, $animationType, $animationDuraction);
        foreach ($varImagem as $key => $val) {

            $result[$key] = $val;

        }
        $plugins = new Plugin();
        include get_template_directory() . '/components/image/line/frontend/view.php';

    }
}

class Banner
{
    public function principal($banner_image = null, $title = null)
    {
        include get_template_directory() . '/components/banner/principal/frontend/view.php';
    }
    public function blog($banner_image = null, $title = null)
    {
        include get_template_directory() . '/components/banner/blog/frontend/view.php';
    }


    public function animation($type = null, $duration = null)
    {
        $cases = array($type, $duration);
        switch ($cases) {
            case empty($cases[0]):
                $type = "fade-up";

            case empty($cases[1]):
                $duration = "800";

        }
        echo "
        data-aos='$type'
        data-aos-duration='$duration'
        data-aos-easing='ease-in-sine'
        ";

    }
}

class Product
{
    public function principal($image, $title, $subtitle, $arrows_yes_or_no = null, $btn_yes_or_no = null, $btn_link = null)
    {

        include get_template_directory() . '/components/product/frontend/view.php';
    }
}
class ProductBeta
{
    public function principal($image, $title, $subtitle, $arrows_yes_or_no = null, $btn_yes_or_no = null, $btn_link = null)
    {

        include get_template_directory() . '/components/productBeta/frontend/view.php';
    }
}
?>