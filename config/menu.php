<?php
return [

        [
            'name'=>'Danh mục sản phẩm',
            'icon'=>'fa fa-th-list',
            'route'=>'admin.category_product.index',
            'items'=>[
                [
                    'name'=>'Danh sách danh mục',
                    'icon'=>'fa fa-circle-o',
                    'route'=>'admin.category_product.index'
                ],
                [
                    'name'=>'Thêm mới danh mục',
                    'icon'=>'fa fa-circle-o',
                    'route'=>'admin.category_product.create'
                ]
            ]
        ],
        [
            'name'=>'Quản lý sản phẩm',
            'icon'=>'fa fa-cubes',
            'route'=>'admin.product.index',
            'items'=>[
                [
                    'name'=>'Danh sách sản phẩm',
                    'icon'=>'fa fa-circle-o',
                    'route'=>'admin.product.index'
                ],
                [
                    'name'=>'Thêm mới sản phẩm',
                    'icon'=>'fa fa-circle-o',
                    'route'=>'admin.product.create'
                ],
                [
                    'name'=>'Tính năng',
                    'icon'=>'fa fa-circle-o',
                    'route'=>'admin.attribute.index'
                ],
                [
                    'name'=>'Comments',
                    'icon'=>'fa fa-circle-o',
                    'route'=>'admin.comment_product.index'
                ]
            ]
        ],
        [
            'name'=>'Quản lý tài khoản',
            'icon'=>'fa fa-users',
            'route'=>'admin.user.index',
            'items'=>[
                [
                    'name'=>'Danh sách tài khoản',
                    'icon'=>'fa fa-circle-o',
                    'route'=>'admin.user.index'
                ],
                [
                    'name'=>'Thêm mới tài khoản',
                    'icon'=>'fa fa-circle-o',
                    'route'=>'admin.user.create'
                ],
                [
                    'name'=>'Quản lý khách hàng',
                    'icon'=>'fa fa-circle-o',
                    'route'=>'admin.customer'
                ]
            ]
        ],
        [
            'name'=>'Quản lý Role',
            'icon'=>'fa fa-cog',
            'route'=>'admin.role.index',
            'items'=>[
                [
                    'name'=>'Danh sách nhóm',
                    'icon'=>'fa fa-circle-o',
                    'route'=>'admin.role.index'
                ],
                [
                    'name'=>'Thêm mới nhóm',
                    'icon'=>'fa fa-circle-o',
                    'route'=>'admin.role.create'
                ]
            ]
        ],
        [
            'name'=>'Quản lý bài viết',
            'icon'=>'fa fa-newspaper-o',
            'route'=>'admin.blog.index',
            'items'=>[
                [
                    'name'=>'Danh sách bài viết',
                    'icon'=>'fa fa-circle-o',
                    'route'=>'admin.blog.index'
                ],
                [
                    'name'=>'Thêm mới bài viết',
                    'icon'=>'fa fa-circle-o',
                    'route'=>'admin.blog.create'
                ],
                [
                    'name'=>'Danh mục bài viết',
                    'icon'=>'fa fa-circle-o',
                    'route'=>'admin.category_blog.index'
                ]
            ]
        ],
        [
            'name'=>'Quản lý đơn hàng',
            'icon'=>'fa fa-cubes',
            'route'=>'admin.shipping.index',
            'items'=>[
                [
                    'name'=>'Danh sách đơn hàng',
                    'icon'=>'fa fa-circle-o',
                    'route'=>'admin.bill.index'
                ],
                [
                    'name'=>'Shipping',
                    'icon'=>'fa fa-circle-o',
                    'route'=>'admin.shipping.index'
                ],
                [
                    'name'=>'Payment',
                    'icon'=>'fa fa-circle-o',
                    'route'=>'admin.payment.index'
                ],
            ]
        ],
        [
            'name'=>'Quản lý banner',
            'icon'=>'fa fa-file-image-o',
            'route'=>'admin.banner.index',
            'items'=>[
                [
                    'name'=>'Danh sách banner',
                    'icon'=>'fa fa-circle-o',
                    'route'=>'admin.banner.index'
                ],
                [
                    'name'=>'Thêm mới banner',
                    'icon'=>'fa fa-circle-o',
                    'route'=>'admin.banner.create'
                ],
            ]
        ],
        [
            'name'=>'Quản lý quảng cáo',
            'icon'=>'fa fa-file-image-o',
            'route'=>'admin.advertisement.index',
            'items'=>[
                [
                    'name'=>'Danh sách quảng cáo',
                    'icon'=>'fa fa-circle-o',
                    'route'=>'admin.advertisement.index'
                ],
                [
                    'name'=>'Thêm mới quảng cáo',
                    'icon'=>'fa fa-circle-o',
                    'route'=>'admin.advertisement.create'
                ],
            ]
        ],
        [
            'name'=>'Cài đặt cấu hình',
            'icon'=>'fa fa-cog',
            'route'=>'admin.config.index',
            'items'=>[
                [
                    'name'=>'Cấu hình',
                    'icon'=>'fa fa-circle-o',
                    'route'=>'admin.config.index'
                ],
                [
                    'name'=>'Thêm mới cấu hình',
                    'icon'=>'fa fa-circle-o',
                    'route'=>'admin.config.create'
                ],
            ]
        ],
        [
            'name'=>'Quản lý Tags',
            'icon'=>'fa fa-tags',
            'route'=>'admin.tag.index'
        ],
        [
            'name'=>'Quản lý thư viện ảnh',
            'icon'=>'fa fa-image',
            'route'=>'admin.file'
        ]
];
?>
