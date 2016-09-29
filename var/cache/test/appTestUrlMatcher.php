<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appTestUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appTestUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/fonts/roboto/Roboto-')) {
            if (0 === strpos($pathinfo, '/fonts/roboto/Roboto-Bold')) {
                // _assetic_roboto_bold_ttf
                if ($pathinfo === '/fonts/roboto/Roboto-Bold.ttf') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_bold_ttf',  'pos' => NULL,  '_format' => 'ttf',  '_route' => '_assetic_roboto_bold_ttf',);
                }

                // _assetic_roboto_bold_ttf_0
                if ($pathinfo === '/fonts/roboto/Roboto-Bold_Roboto-Bold_1.ttf') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_bold_ttf',  'pos' => 0,  '_format' => 'ttf',  '_route' => '_assetic_roboto_bold_ttf_0',);
                }

                // _assetic_roboto_bold_woff
                if ($pathinfo === '/fonts/roboto/Roboto-Bold.woff') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_bold_woff',  'pos' => NULL,  '_format' => 'woff',  '_route' => '_assetic_roboto_bold_woff',);
                }

                // _assetic_roboto_bold_woff_0
                if ($pathinfo === '/fonts/roboto/Roboto-Bold_Roboto-Bold_1.woff') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_bold_woff',  'pos' => 0,  '_format' => 'woff',  '_route' => '_assetic_roboto_bold_woff_0',);
                }

                // _assetic_roboto_bold_woff2
                if ($pathinfo === '/fonts/roboto/Roboto-Bold.woff2') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_bold_woff2',  'pos' => NULL,  '_format' => 'woff2',  '_route' => '_assetic_roboto_bold_woff2',);
                }

                // _assetic_roboto_bold_woff2_0
                if ($pathinfo === '/fonts/roboto/Roboto-Bold_Roboto-Bold_1.woff2') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_bold_woff2',  'pos' => 0,  '_format' => 'woff2',  '_route' => '_assetic_roboto_bold_woff2_0',);
                }

            }

            if (0 === strpos($pathinfo, '/fonts/roboto/Roboto-Light')) {
                // _assetic_roboto_light_ttf
                if ($pathinfo === '/fonts/roboto/Roboto-Light.ttf') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_light_ttf',  'pos' => NULL,  '_format' => 'ttf',  '_route' => '_assetic_roboto_light_ttf',);
                }

                // _assetic_roboto_light_ttf_0
                if ($pathinfo === '/fonts/roboto/Roboto-Light_Roboto-Light_1.ttf') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_light_ttf',  'pos' => 0,  '_format' => 'ttf',  '_route' => '_assetic_roboto_light_ttf_0',);
                }

                // _assetic_roboto_light_woff
                if ($pathinfo === '/fonts/roboto/Roboto-Light.woff') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_light_woff',  'pos' => NULL,  '_format' => 'woff',  '_route' => '_assetic_roboto_light_woff',);
                }

                // _assetic_roboto_light_woff_0
                if ($pathinfo === '/fonts/roboto/Roboto-Light_Roboto-Light_1.woff') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_light_woff',  'pos' => 0,  '_format' => 'woff',  '_route' => '_assetic_roboto_light_woff_0',);
                }

                // _assetic_roboto_light_woff2
                if ($pathinfo === '/fonts/roboto/Roboto-Light.woff2') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_light_woff2',  'pos' => NULL,  '_format' => 'woff2',  '_route' => '_assetic_roboto_light_woff2',);
                }

                // _assetic_roboto_light_woff2_0
                if ($pathinfo === '/fonts/roboto/Roboto-Light_Roboto-Light_1.woff2') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_light_woff2',  'pos' => 0,  '_format' => 'woff2',  '_route' => '_assetic_roboto_light_woff2_0',);
                }

            }

            if (0 === strpos($pathinfo, '/fonts/roboto/Roboto-Medium')) {
                // _assetic_roboto_medium_ttf
                if ($pathinfo === '/fonts/roboto/Roboto-Medium.ttf') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_medium_ttf',  'pos' => NULL,  '_format' => 'ttf',  '_route' => '_assetic_roboto_medium_ttf',);
                }

                // _assetic_roboto_medium_ttf_0
                if ($pathinfo === '/fonts/roboto/Roboto-Medium_Roboto-Medium_1.ttf') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_medium_ttf',  'pos' => 0,  '_format' => 'ttf',  '_route' => '_assetic_roboto_medium_ttf_0',);
                }

                // _assetic_roboto_medium_woff
                if ($pathinfo === '/fonts/roboto/Roboto-Medium.woff') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_medium_woff',  'pos' => NULL,  '_format' => 'woff',  '_route' => '_assetic_roboto_medium_woff',);
                }

                // _assetic_roboto_medium_woff_0
                if ($pathinfo === '/fonts/roboto/Roboto-Medium_Roboto-Medium_1.woff') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_medium_woff',  'pos' => 0,  '_format' => 'woff',  '_route' => '_assetic_roboto_medium_woff_0',);
                }

                // _assetic_roboto_medium_woff2
                if ($pathinfo === '/fonts/roboto/Roboto-Medium.woff2') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_medium_woff2',  'pos' => NULL,  '_format' => 'woff2',  '_route' => '_assetic_roboto_medium_woff2',);
                }

                // _assetic_roboto_medium_woff2_0
                if ($pathinfo === '/fonts/roboto/Roboto-Medium_Roboto-Medium_1.woff2') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_medium_woff2',  'pos' => 0,  '_format' => 'woff2',  '_route' => '_assetic_roboto_medium_woff2_0',);
                }

            }

            if (0 === strpos($pathinfo, '/fonts/roboto/Roboto-Regular')) {
                // _assetic_roboto_regular_ttf
                if ($pathinfo === '/fonts/roboto/Roboto-Regular.ttf') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_regular_ttf',  'pos' => NULL,  '_format' => 'ttf',  '_route' => '_assetic_roboto_regular_ttf',);
                }

                // _assetic_roboto_regular_ttf_0
                if ($pathinfo === '/fonts/roboto/Roboto-Regular_Roboto-Regular_1.ttf') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_regular_ttf',  'pos' => 0,  '_format' => 'ttf',  '_route' => '_assetic_roboto_regular_ttf_0',);
                }

                // _assetic_roboto_regular_woff
                if ($pathinfo === '/fonts/roboto/Roboto-Regular.woff') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_regular_woff',  'pos' => NULL,  '_format' => 'woff',  '_route' => '_assetic_roboto_regular_woff',);
                }

                // _assetic_roboto_regular_woff_0
                if ($pathinfo === '/fonts/roboto/Roboto-Regular_Roboto-Regular_1.woff') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_regular_woff',  'pos' => 0,  '_format' => 'woff',  '_route' => '_assetic_roboto_regular_woff_0',);
                }

                // _assetic_roboto_regular_woff2
                if ($pathinfo === '/fonts/roboto/Roboto-Regular.woff2') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_regular_woff2',  'pos' => NULL,  '_format' => 'woff2',  '_route' => '_assetic_roboto_regular_woff2',);
                }

                // _assetic_roboto_regular_woff2_0
                if ($pathinfo === '/fonts/roboto/Roboto-Regular_Roboto-Regular_1.woff2') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_regular_woff2',  'pos' => 0,  '_format' => 'woff2',  '_route' => '_assetic_roboto_regular_woff2_0',);
                }

            }

            if (0 === strpos($pathinfo, '/fonts/roboto/Roboto-Thin')) {
                // _assetic_roboto_thin_ttf
                if ($pathinfo === '/fonts/roboto/Roboto-Thin.ttf') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_thin_ttf',  'pos' => NULL,  '_format' => 'ttf',  '_route' => '_assetic_roboto_thin_ttf',);
                }

                // _assetic_roboto_thin_ttf_0
                if ($pathinfo === '/fonts/roboto/Roboto-Thin_Roboto-Thin_1.ttf') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_thin_ttf',  'pos' => 0,  '_format' => 'ttf',  '_route' => '_assetic_roboto_thin_ttf_0',);
                }

                // _assetic_roboto_thin_woff
                if ($pathinfo === '/fonts/roboto/Roboto-Thin.woff') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_thin_woff',  'pos' => NULL,  '_format' => 'woff',  '_route' => '_assetic_roboto_thin_woff',);
                }

                // _assetic_roboto_thin_woff_0
                if ($pathinfo === '/fonts/roboto/Roboto-Thin_Roboto-Thin_1.woff') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_thin_woff',  'pos' => 0,  '_format' => 'woff',  '_route' => '_assetic_roboto_thin_woff_0',);
                }

                // _assetic_roboto_thin_woff2
                if ($pathinfo === '/fonts/roboto/Roboto-Thin.woff2') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_thin_woff2',  'pos' => NULL,  '_format' => 'woff2',  '_route' => '_assetic_roboto_thin_woff2',);
                }

                // _assetic_roboto_thin_woff2_0
                if ($pathinfo === '/fonts/roboto/Roboto-Thin_Roboto-Thin_1.woff2') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'roboto_thin_woff2',  'pos' => 0,  '_format' => 'woff2',  '_route' => '_assetic_roboto_thin_woff2_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/app')) {
            // _assetic_859e361
            if ($pathinfo === '/css/app.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '859e361',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_859e361',);
            }

            if (0 === strpos($pathinfo, '/css/app_ma')) {
                // _assetic_859e361_0
                if ($pathinfo === '/css/app_materialize_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '859e361',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_859e361_0',);
                }

                // _assetic_859e361_1
                if ($pathinfo === '/css/app_main_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '859e361',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_859e361_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/app')) {
            // _assetic_2bafce5
            if ($pathinfo === '/js/app.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '2bafce5',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_2bafce5',);
            }

            if (0 === strpos($pathinfo, '/js/app_')) {
                // _assetic_2bafce5_0
                if ($pathinfo === '/js/app_jquery.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '2bafce5',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_2bafce5_0',);
                }

                if (0 === strpos($pathinfo, '/js/app_ma')) {
                    // _assetic_2bafce5_1
                    if ($pathinfo === '/js/app_materialize.min_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '2bafce5',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_2bafce5_1',);
                    }

                    // _assetic_2bafce5_2
                    if ($pathinfo === '/js/app_main_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '2bafce5',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_2bafce5_2',);
                    }

                }

            }

        }

        // default
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_default;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'default');
            }

            return array (  '_controller' => 'App\\Controller\\TestController::indexAction',  '_route' => 'default',);
        }
        not_default:

        if (0 === strpos($pathinfo, '/product')) {
            // app_front_product_index
            if (rtrim($pathinfo, '/') === '/product') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_app_front_product_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'app_front_product_index');
                }

                return array (  '_controller' => 'App\\Controller\\front\\ProductController::indexAction',  '_route' => 'app_front_product_index',);
            }
            not_app_front_product_index:

            // app_front_product_post
            if ($pathinfo === '/product/post') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_app_front_product_post;
                }

                return array (  '_controller' => 'App\\Controller\\front\\ProductController::postAction',  '_route' => 'app_front_product_post',);
            }
            not_app_front_product_post:

        }

        // app_front_user_post
        if ($pathinfo === '/user/post') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_app_front_user_post;
            }

            return array (  '_controller' => 'App\\Controller\\front\\UserController::postAction',  '_route' => 'app_front_user_post',);
        }
        not_app_front_user_post:

        if (0 === strpos($pathinfo, '/api')) {
            if (0 === strpos($pathinfo, '/api/v1')) {
                if (0 === strpos($pathinfo, '/api/v1/product')) {
                    // app_api_product_getproduct
                    if (0 === strpos($pathinfo, '/api/v1/product/product') && preg_match('#^/api/v1/product/product/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_app_api_product_getproduct;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_api_product_getproduct')), array (  '_controller' => 'App\\Controller\\Api\\ProductController::getProductAction',));
                    }
                    not_app_api_product_getproduct:

                    // app_api_product_postproduct
                    if ($pathinfo === '/api/v1/product/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_app_api_product_postproduct;
                        }

                        return array (  '_controller' => 'App\\Controller\\Api\\ProductController::postProductAction',  '_route' => 'app_api_product_postproduct',);
                    }
                    not_app_api_product_postproduct:

                    // app_api_product_getidproduct
                    if ($pathinfo === '/api/v1/product/getIdproduct') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_app_api_product_getidproduct;
                        }

                        return array (  '_controller' => 'App\\Controller\\Api\\ProductController::getIdProductAction',  '_route' => 'app_api_product_getidproduct',);
                    }
                    not_app_api_product_getidproduct:

                    // app_api_product_getproducts
                    if ($pathinfo === '/api/v1/product/all') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_app_api_product_getproducts;
                        }

                        return array (  '_controller' => 'App\\Controller\\Api\\ProductController::getProductsAction',  '_route' => 'app_api_product_getproducts',);
                    }
                    not_app_api_product_getproducts:

                }

                if (0 === strpos($pathinfo, '/api/v1/user')) {
                    // app_api_user_getuser
                    if (preg_match('#^/api/v1/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_app_api_user_getuser;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_api_user_getuser')), array (  '_controller' => 'App\\Controller\\Api\\UserController::getUserAction',));
                    }
                    not_app_api_user_getuser:

                    // app_api_user_postuser
                    if ($pathinfo === '/api/v1/user/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_app_api_user_postuser;
                        }

                        return array (  '_controller' => 'App\\Controller\\Api\\UserController::postUserAction',  '_route' => 'app_api_user_postuser',);
                    }
                    not_app_api_user_postuser:

                    // app_api_user_postproduct
                    if ($pathinfo === '/api/v1/user/postProductUser') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_app_api_user_postproduct;
                        }

                        return array (  '_controller' => 'App\\Controller\\Api\\UserController::postProductAction',  '_route' => 'app_api_user_postproduct',);
                    }
                    not_app_api_user_postproduct:

                    // app_api_user_getproduct
                    if (0 === strpos($pathinfo, '/api/v1/user/getProductUser') && preg_match('#^/api/v1/user/getProductUser/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_app_api_user_getproduct;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_api_user_getproduct')), array (  '_controller' => 'App\\Controller\\Api\\UserController::getProductAction',));
                    }
                    not_app_api_user_getproduct:

                }

            }

            // nelmio_api_doc_index
            if (0 === strpos($pathinfo, '/api/doc') && preg_match('#^/api/doc(?:/(?P<view>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_nelmio_api_doc_index;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nelmio_api_doc_index')), array (  '_controller' => 'Nelmio\\ApiDocBundle\\Controller\\ApiDocController::indexAction',  'view' => 'default',));
            }
            not_nelmio_api_doc_index:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}