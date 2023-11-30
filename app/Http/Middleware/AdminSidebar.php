<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminSidebar {
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response {
        \Menu::make('admin_sidebar', function ($menu) {
            // * used for general or dropdown parent
            $link_style = 'flex h-12 cursor-pointer items-center truncate rounded-[5px]
                            px-6 py-4 text-gray-700 font-bold outline-none transition duration-300
                            [&>span]:text-primary
                            ease-linear hover:text-white hover:bg-primary hover:[&>span]:text-white
                            active:bg-primary active:text-inherit active:bg-primary
                            data-[te-sidenav-state-active]:text-inherit
                            data-[te-sidenav-state-focus]:outline-none
                            motion-reduce:transition-none';

            // * used for dropdown child
            $link_style_child = 'flex h-10 cursor-pointer items-center truncate rounded-[5px]
                                py-4 pr-6 text-gray-700 font-bold outline-none
                                transition duration-300 ease-linear
                                hover:text-primary
                                active:bg-slate-50 active:text-inherit active:outline-none
                                data-[te-sidenav-state-active]:text-inherit
                                data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none';

            $dropdown_parent = function ($name, $icon) {
                return '
                <span class="mr-4">
                    <i class="' . $icon . '"></i>
                </span>
                <span class="group-[&[data-te-sidenav-slim-collapsed=' . "'true'" . ']]:data-[te-sidenav-slim=' . "'false'" . ']:hidden"
                    data-te-sidenav-slim=' . "'false'" . '>'
                    . $name . '
                </span>
                <span
                    class="absolute right-0 ml-auto mr-[0.5rem] transition-transform duration-300 ease-linear motion-reduce:transition-none"
                    data-te-sidenav-rotate-icon-ref>
                    <i class="fa-solid fa-circle-chevron-down"></i>
                </span>';
            };

            $item = function ($name, $icon) {
                // * selector eg. svg = [&>svg]:h-4 [&>svg]:w-4 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300
                return '<span class="mr-4">
                    <i class="' . $icon . '"></i>
                </span>
                <span class="group-[&[data-te-sidenav-slim-collapsed=' . "'true'" . ']]:data-[te-sidenav-slim=' . "'false'" . ']:hidden"
                    data-te-sidenav-slim=' . "'false'" . '>' . $name . '</span>';
            };

            $itemDropdown = function ($name) {
                return '
                        <span class="mr-4">
                            <i class="fa-regular fa-circle fa-2xs"></i>
                        </span>
                        <span class="group-[&[data-te-sidenav-slim-collapsed=' . "'true'" . ']]:data-[te-sidenav-slim=' . "'false'" . ']:hidden"
                            data-te-sidenav-slim=' . "'false'" . '>' . $name . '
                        </span>';
            };

            $menu->add($item('Dashboard', 'fa-solid fa-industry'), [
                'route' => 'backend.dashboard',
                'class' => 'relative',
            ])
                ->data([
                    'order' => 1,
                    'activematches' => 'admin/dashboard*',
                ])
                ->link->attr([
                    'class' => $link_style,
                    'data-te-sidenav-link-ref'
                ]);

            if (Auth::user()->can('view_pasien') || Auth::user()->can('view_pasien_bkia') || Auth::user()->can('view_pasien_vaksin')) {
                $pasien = $menu->add($dropdown_parent('Registrasi', 'fa-solid fa-industry'), [
                    'class' => 'relative',
                ])
                    ->data([
                        'order' => 1,
                        'activematches' => 'admin/pasien*',
                        'permission' => [],
                    ]);

                $pasien->link->attr([
                    'href' => 'javascript:;',
                    'class' => $link_style,
                    'data-te-sidenav-link-ref'
                ]);

                if (Auth::user()->can('view_pasien')) {
                    $pasien
                        ->add($itemDropdown('Pasien'), [
                            'route' => 'backend.pasien.p.index',
                            'class' => 'relative',
                        ])
                        ->data([
                            'activematches' => 'admin/pasien/p*',
                        ])
                        ->link->attr([
                            'class' => $link_style_child
                        ]);
                }

                if (Auth::user()->can('view_pasien_vaksin')) {
                    $pasien
                        ->add($itemDropdown('Vaksin'), [
                            'route' => 'backend.pasien.vaksin.index',
                            'class' => 'relative',
                        ])
                        ->data([
                            'activematches' => 'admin/pasien/vaksin*',
                        ])
                        ->link->attr([
                            'class' => $link_style_child
                        ]);
                }

                if (Auth::user()->can('view_pasien_bkia')) {
                    $pasien
                        ->add($itemDropdown('BKIA'), [
                            'route' => 'backend.pasien.bkia.index',
                            'class' => 'relative',
                        ])
                        ->data([
                            'activematches' => 'admin/pasien/bkia*',
                        ])
                        ->link->attr([
                            'class' => $link_style_child
                        ]);
                }
            }

            if (Auth::user()->can('view_dokter')) {
                $menu->add($item('Dokter', 'fa-solid fa-industry'), [
                    'route' => 'backend.dokter.index',
                    'class' => 'relative',
                ])
                    ->data([
                        'order' => 1,
                        'activematches' => 'admin/dokter*',
                    ])
                    ->link->attr([
                        'class' => $link_style,
                        'data-te-sidenav-link-ref'
                    ]);
            }


            if (Auth::user()->can('view_schedule')) {
                $menu->add($item('Schedule', 'fa-solid fa-industry'), [
                    'route' => 'backend.schedule.index',
                    'class' => 'relative',
                ])
                    ->data([
                        'order' => 1,
                        'activematches' => 'admin/schedule*',
                    ])
                    ->link->attr([
                        'class' => $link_style,
                        'data-te-sidenav-link-ref'
                    ]);
            }


            // Notifications
            /*  $menu->add('<i class="nav-icon fas fa-bell"></i> Notifications', [
                'route' => 'backend.notifications.index',
                'class' => 'nav-item',
            ])
                ->data([
                    'order' => 99,
                    'activematches' => 'admin/notifications*',
                    'permission' => [],
                ])
                ->link->attr([
                    'class' => 'nav-link',
                ]); */


            // Access Control Dropdown
            /* $accessControl = $menu->add('<i class="nav-icon fa-solid fa-user-gear"></i> Access Control', [
                'class' => 'nav-group',
            ])
                ->data([
                    'order' => 104,
                    'activematches' => [
                        'admin/users*',
                        'admin/roles*',
                    ],
                    'permission' => ['view_users', 'view_roles'],
                ]);
            $accessControl->link->attr([
                'class' => 'nav-link nav-group-toggle',
                'href' => '#',
            ]);

            // Submenu: Users
            $accessControl->add('<i class="nav-icon fa-solid fa-user-group"></i> Users', [
                'route' => 'backend.users.index',
                'class' => 'nav-item',
            ])
                ->data([
                    'order' => 105,
                    'activematches' => 'admin/users*',
                    'permission' => ['view_users'],
                ])
                ->link->attr([
                    'class' => 'nav-link',
                ]);

            // Submenu: Roles
            $accessControl->add('<i class="nav-icon fa-solid fa-user-shield"></i> Roles', [
                'route' => 'backend.roles.index',
                'class' => 'nav-item',
            ])
                ->data([
                    'order' => 106,
                    'activematches' => 'admin/roles*',
                    'permission' => ['view_roles'],
                ])
                ->link->attr([
                    'class' => 'nav-link',
                ]);

            // Log Viewer
            // Log Viewer Dropdown
            $accessControl = $menu->add('<i class="nav-icon fa-solid fa-list-check"></i> Log Viewer', [
                'class' => 'nav-group',
            ])
                ->data([
                    'order' => 107,
                    'activematches' => [
                        'log-viewer*',
                    ],
                    'permission' => ['view_logs'],
                ]);
            $accessControl->link->attr([
                'class' => 'nav-link nav-group-toggle',
                'href' => '#',
            ]);

            // Submenu: Log Viewer Dashboard
            $accessControl->add('<i class="nav-icon fa-solid fa-list"></i> Dashboard', [
                'route' => 'log-viewer::dashboard',
                'class' => 'nav-item',
            ])
                ->data([
                    'order' => 108,
                    'activematches' => 'admin/log-viewer',
                ])
                ->link->attr([
                    'class' => 'nav-link',
                ]);

            // Submenu: Log Viewer Logs by Days
            $accessControl->add('<i class="nav-icon fa-solid fa-list-ol"></i> Logs by Days', [
                'route' => 'log-viewer::logs.list',
                'class' => 'nav-item',
            ])
                ->data([
                    'order' => 109,
                    'activematches' => 'admin/log-viewer/logs*',
                ])
                ->link->attr([
                    'class' => 'nav-link',
                ]); */

            // Set Active Menu
            $menu->filter(function ($item) {
                if ($item->activematches) {
                    $activematches = (is_string($item->activematches)) ? [$item->activematches] : $item->activematches;
                    foreach ($activematches as $pattern) {
                        if (request()->is($pattern)) {
                            $item->active();
                            $item->link->active();
                            if ($item->hasParent()) {
                                $item->parent()->active();
                            }
                        }
                    }
                }

                return true;
            });
        })->sortBy('order');




        return $next($request);
    }
}
