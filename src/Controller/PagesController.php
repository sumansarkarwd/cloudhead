<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PagesController extends Controller
{
    public function index()
    {
        return $this->render('pages/index.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }
    public function overview()
    {
        return $this->render('pages/overview.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }
    public function story()
    {
        return $this->render('pages/story.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }
    public function team()
    {
        return $this->render('pages/team.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }
    public function career()
    {
        return $this->render('pages/career.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }
    public function clients()
    {
        return $this->render('pages/clients.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }
    public function works()
    {
        return $this->render('pages/works.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }
    public function portfolio()
    {
        return $this->render('pages/portfolio.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }
    public function contact()
    {
        return $this->render('pages/contact.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }
    /*Pages*/

    public function responsive_web_design()
    {
        return $this->render('pages/responsive-web-design.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }
    public function seo_friendly_web_design()
    {
        return $this->render('pages/seo-friendly-web-design.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }
    public function static_dynamic_web_design()
    {
        return $this->render('pages/static-dynamic-web-design.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }
    public function psd_to_html()
    {
        return $this->render('pages/psd-to-html.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }
    public function wordpress_websites()
    {
        return $this->render('pages/wordpress-websites.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }

    public function php_web_application()
    {
        return $this->render('pages/php-web-application.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }
    public function wordpress_joomla_drupal()
    {
        return $this->render('pages/wordpress-joomla-drupal.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }
    public function blog_design()
    {
        return $this->render('pages/blog-design.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }
    public function php_frameworks()
    {
        return $this->render('pages/php-frameworks.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }

    public function ecommerce_portal()
    {
        return $this->render('pages/ecommerce-portal.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }

    public function pay_per_click()
    {
        return $this->render('pages/pay-per-click.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }
    public function social_media_promotion()
    {
        return $this->render('pages/socia-media-promotion.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }
    public function email_markating()
    {
        return $this->render('pages/email-markating.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }

    public function android_app_development()
    {
        return $this->render('pages/android-app-development.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }
    public function ios_app_development()
    {
        return $this->render('pages/ios-app-development.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }
    public function cross_platform_app_development()
    {
        return $this->render('pages/cross-platform-app-development.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }
}
