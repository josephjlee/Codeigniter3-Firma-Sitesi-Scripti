<?php

class Home extends CI_Controller
{

    public $viewFolder = "";

    public function __construct()
    {
        parent::__construct();

        $this->viewFolder = "homepage";
        $this->load->helper("text");

    }

    public function index()
    {

        // Anasayfa...
        $viewData = new stdClass();
        $viewData->viewFolder = "home_v";

        $this->load->model("product_model");
        $this->load->model("slide_model");

        $c1 = $this->product_model->get_all(
            array(
                "isActive" => 1
            ), "rank ASC ", "12"
        );
        $slides = $this->slide_model->get_all(
            array(
                "isActive" => 1
            ), "rank ASC"
        );

        $viewData->baslik = "Anasayfa";
        $viewData->c1 = $c1;
        $viewData->slides = $slides;


        $this->load->view($viewData->viewFolder, $viewData);

    }

    public function loadRecord($rowno = 0)
    {
        $viewData = new stdClass();
        $viewData->viewFolder = "search_v";
        $this->load->model('product_model');
        $this->load->library("pagination");
        $this->load->library('session');

        $search_text = "";
        if ($this->input->post('submit') != NULL) {
            $search_text = $this->input->post('search');
            $this->session->set_userdata(array("search" => $search_text));
        } else {
            if ($this->session->userdata('search') != NULL) {
                $search_text = $this->session->userdata('search');
            }
        }

        // Row per page
        $rowperpage = 5;

        // Row position
        if ($rowno != 0) {
            $rowno = ($rowno - 1) * $rowperpage;
        }

        // All records count
        $allcount = $this->product_model->getrecordCount($search_text);

        // Get records
        $users_record = $this->product_model->getData($rowno, $rowperpage, $search_text);

        // Pagination Configuration
        $config['base_url'] = base_url("arama-sonuc");
        $config['use_page_numbers'] = TRUE;
        $config['total_rows'] = $allcount;
        $config['per_page'] = $rowperpage;

        /* This Application Must Be Used With BootStrap 3 *  */
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";

        // Initialize
        $this->pagination->initialize($config);

        $viewData->pagination= $this->pagination->create_links();
        $viewData-> result = $users_record;
        $viewData->row = $rowno;
        $viewData->search = $search_text;

        // Load view
        $this->load->view($viewData->viewFolder, $viewData);

    }

    public function product_list(){
        $viewData = new stdClass();
        $viewData->viewFolder = "product_list_v";
        $viewData->baslik = "Ürün Listesi";
        $this->load->model("product_model");
        $this->load->library("pagination");
        $config = array();
        $config["base_url"] = base_url() . "urun-sayfa";
        $config["total_rows"] = $this->product_model->get_count();
        $config["per_page"] = 4;
        $config["uri_segment"] = 2;
        /* This Application Must Be Used With BootStrap 3 *  */
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] ="</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $viewData->links = $this->pagination->create_links();
        $viewData->products = $this->product_model->get_records($config["per_page"], $page);
        $this->load->view($viewData->viewFolder, $viewData);
    }

    public function product_detail($url = "")
    {

        $viewData = new stdClass();
        $viewData->viewFolder = "product_v";
        $viewData->opengraph = true;

        $this->load->model("product_model");
        $this->load->model("product_image_model");

       $deli = $viewData->product = $this->product_model->get(
            array(
                "isActive" => 1,
                "url" => $url
            )
        );

        $viewData->product_images = $this->product_image_model->get_all(
            array(
                "isActive" => 1,
                "product_id" => $viewData->product->id,
            ), "rank ASC"
        );

        $viewData->other_products = $this->product_model->get_all(
            array(
                "isActive" => 1,
                "id !=" => $viewData->product->id
            ), "rand()", array("start" => 0, "count" => 3)
        );

        $viewData->baslik = $deli->title;

        $this->load->view($viewData->viewFolder, $viewData);

    }

    public function portfolio_list()
    {

        $viewData = new stdClass();
        $viewData->viewFolder = "portfolio_list_v";

        $this->load->model("portfolio_model");

        $viewData->portfolios = $this->portfolio_model->get_all(
            array(
                "isActive" => 1
            ), "rank ASC"
        );


        $this->load->view($viewData->viewFolder, $viewData);

    }

    public function portfolio_detail($url)
    {


        $viewData = new stdClass();
        $viewData->viewFolder = "portfolio_v";

        $this->load->model("portfolio_model");
        $this->load->model("portfolio_image_model");

        $viewData->portfolio = $this->portfolio_model->get(
            array(
                "isActive" => 1,
                "url" => $url
            )
        );

        $viewData->portfolio_images = $this->portfolio_image_model->get_all(
            array(
                "isActive" => 1,
                "portfolio_id" => $viewData->portfolio->id,
            ), "rank ASC"
        );

        $viewData->other_portfolios = $this->portfolio_model->get_all(
            array(
                "isActive" => 1,
                "id !=" => $viewData->portfolio->id
            ), "rand()", array("start" => 0, "count" => 3)
        );

        $this->load->view($viewData->viewFolder, $viewData);


    }


    public function course_list()
    {

        $viewData = new stdClass();
        $viewData->viewFolder = "course_list_v";

        $this->load->model("course_model");

        $viewData->courses = $this->course_model->get_all(
            array(
                "isActive" => 1
            ), "rank ASC, event_date ASC"
        );

        $this->load->view($viewData->viewFolder, $viewData);

    }

    public function course_detail($url)
    {

        $viewData = new stdClass();
        $viewData->viewFolder = "course_v";

        $this->load->model("course_model");

        $viewData->course = $this->course_model->get(
            array(
                "isActive" => 1,
                "url" => $url
            )
        );


        $viewData->other_courses = $this->course_model->get_all(
            array(
                "isActive" => 1,
                "id !=" => $viewData->course->id
            ), "rand()", array("start" => 0, "count" => 3)
        );

        $this->load->view($viewData->viewFolder, $viewData);

    }


    public function reference_list()
    {

        $viewData = new stdClass();
        $viewData->viewFolder = "reference_list_v";

        $this->load->model("reference_model");

        $viewData->references = $this->reference_model->get_all(
            array(
                "isActive" => 1
            ), "rank ASC"
        );

        $this->load->view($viewData->viewFolder, $viewData);

    }

    public function brand_list()
    {

        $viewData = new stdClass();
        $viewData->viewFolder = "brand_list_v";

        $this->load->model("brand_model");

        $viewData->brands = $this->brand_model->get_all(
            array(
                "isActive" => 1
            ), "rank ASC"
        );

        $this->load->view($viewData->viewFolder, $viewData);

    }

    public function service_list()
    {

        $viewData = new stdClass();
        $viewData->viewFolder = "service_list_v";

        $this->load->model("service_model");

        $viewData->services = $this->service_model->get_all(
            array(
                "isActive" => 1
            ), "rank ASC"
        );

        $this->load->view($viewData->viewFolder, $viewData);

    }

    public function about_us()
    {


        $viewData = new stdClass();
        $viewData->viewFolder = "about_v";
        $viewData->baslik = "Hakkımızda";
        $this->load->model("settings_model");

        $viewData->settings = $this->settings_model->get();

        $this->load->view($viewData->viewFolder, $viewData);

    }

    public function contact()
    {

        $viewData = new stdClass();
        $viewData->viewFolder = "contact_v";
        $viewData->baslik = "İletişim";
        $this->load->view($viewData->viewFolder, $viewData);

    }

    public function send_contact_message()
    {

        $this->load->library("form_validation");

        $this->form_validation->set_rules("name", "Ad", "trim|required");
        $this->form_validation->set_rules("email", "E-posta", "trim|required|valid_email");
        $this->form_validation->set_rules("subject", "Konu", "trim|required");
        $this->form_validation->set_rules("message", "Mesaj", "trim|required");


        if ($this->form_validation->run() === FALSE) {

            // TODO Alert...


            redirect(base_url("iletisim"));

        } else {


            if ($this->session->userdata("captcha") == $this->input->post("captcha")) {

                $name = $this->input->post("name");
                $email = $this->input->post("email");
                $subject = $this->input->post("subject");
                $message = $this->input->post("message");

                $email_message = "{$name} isimli ziyaretçi. Mesaj Bıraktı <br><b>Mesaj : </b> {$message} <br> <b>E-posta : </b> {$email}";

                if (send_email("", "Site İletişim Mesajı | $subject", $email_message)) {

                    echo "işlem başarılı";

                } else {
                    echo "işlem başarısız";
                }

            } else {

                // TOdO Alert..

                redirect(base_url("iletisim"));
                echo "gönderilemedi";

            }

        }

    }

    public function popup_never_show_again()
    {

        $popup_id = $this->input->post("popup_id");

        set_cookie($popup_id, "true", 60 * 60 * 24 * 365);

    }

    /************** Galeri için kullanilan metodlar **************/

    public function image_gallery_list()
    {

        $viewData = new stdClass();
        $viewData->viewFolder = "galleries_v";
        $viewData->subViewFolder = "image_galleries";
        $viewData->viewName = "list_content";
        $viewData->baslik = "Resim Galerisi";

        $this->load->model("gallery_model");

        $viewData->galleries = $this->gallery_model->get_all(
            array(
                "isActive" => 1,
                "gallery_type" => "image"
            ), "rank DESC"
        );

        $this->load->view($viewData->viewFolder, $viewData);

    }

    public function image_gallery($gallery_url = "")
    {

        if ($gallery_url) {

            $viewData = new stdClass();
            $viewData->viewFolder = "galleries_v";
            $viewData->subViewFolder = "image_galleries";
            $viewData->viewName = "item_content";
            $viewData->gallery = get_gallery_by_url($gallery_url);
            $viewData->baslik = "Resim Galerisi";
            $this->load->model("image_model");

            $viewData->images = $this->image_model->get_all(
                array(
                    "isActive" => 1,
                    "gallery_id" => $viewData->gallery->id,
                ), "rank DESC"
            );

            $this->load->view($viewData->viewFolder, $viewData);

        }

    }

    public function video_gallery_list()
    {

        $viewData = new stdClass();
        $viewData->viewFolder = "galleries_v";
        $viewData->subViewFolder = "video_galleries";
        $viewData->viewName = "list_content";

        $this->load->model("gallery_model");

        $viewData->galleries = $this->gallery_model->get_all(
            array(
                "isActive" => 1,
                "gallery_type" => "video"
            ), "rank DESC"
        );
        $viewData->baslik = "Video Galerisi";
        $this->load->view($viewData->viewFolder, $viewData);

    }

    public function video_gallery($gallery_url = "")
    {

        if ($gallery_url) {

            $viewData = new stdClass();
            $viewData->viewFolder = "galleries_v";
            $viewData->subViewFolder = "video_galleries";
            $viewData->viewName = "item_content";
            $deli = $viewData->gallery = get_gallery_by_url($gallery_url);

            $this->load->model("video_model");

            $viewData->videos = $this->video_model->get_all(
                array(
                    "isActive" => 1,
                    "gallery_id" => $viewData->gallery->id,
                ), "rank DESC"
            );
            $viewData->baslik = $deli->title;
            $this->load->view($viewData->viewFolder, $viewData);

        }

    }

    public function file_gallery_list()
    {

        $viewData = new stdClass();
        $viewData->viewFolder = "galleries_v";
        $viewData->subViewFolder = "file_galleries";
        $viewData->viewName = "list_content";
        $viewData->baslik = "Dosya Galerisi";
        $this->load->model("gallery_model");

        $viewData->galleries = $this->gallery_model->get_all(
            array(
                "isActive" => 1,
                "gallery_type" => "file"
            ), "rank DESC"
        );

        $this->load->view($viewData->viewFolder, $viewData);

    }

    public function file_gallery($gallery_url = "")
    {

        if ($gallery_url) {

            $viewData = new stdClass();
            $viewData->viewFolder = "galleries_v";
            $viewData->subViewFolder = "file_galleries";
            $viewData->viewName = "item_content";
           $deli = $viewData->gallery = get_gallery_by_url($gallery_url);

            $this->load->model("file_model");

            $viewData->files = $this->file_model->get_all(
                array(
                    "isActive" => 1,
                    "gallery_id" => $viewData->gallery->id,
                ), "rank DESC"
            );
            $viewData->baslik = $deli->title;
            $this->load->view($viewData->viewFolder, $viewData);

        }

    }


}
