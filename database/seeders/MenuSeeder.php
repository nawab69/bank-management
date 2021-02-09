<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\MenuItem;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menu = Menu::updateOrCreate(['name' => 'backend-sidebar', 'description' => 'This is backend sidebar', 'deletable' => false]);

        MenuItem::updateOrCreate(['menu_id' => $menu->id, 'type' => 'divider', 'parent_id' => null, 'order' => 1, 'divider_title' => 'Menus']);
        MenuItem::updateOrCreate(['menu_id' => $menu->id, 'type' => 'item', 'parent_id' => null, 'order' => 2, 'title' => 'Dashboard', 'url' => "/admin/dashboard", 'icon_class' => 'pe-7s-rocket']);
        MenuItem::updateOrCreate(['menu_id' => $menu->id, 'type' => 'item', 'parent_id' => null, 'order' => 3, 'title' => 'Pages', 'url' => "/admin/pages", 'icon_class' => 'pe-7s-news-paper']);

        MenuItem::updateOrCreate(['menu_id' => $menu->id, 'type' => 'divider', 'parent_id' => null, 'order' => 4, 'divider_title' => 'Access Control']);
        MenuItem::updateOrCreate(['menu_id' => $menu->id, 'type' => 'item','parent_id' => null, 'order' => 5, 'title' => 'Roles', 'url' => "/admin/roles", 'icon_class' => 'pe-7s-check']);
        MenuItem::updateOrCreate(['menu_id' => $menu->id, 'type' => 'item', 'parent_id' => null, 'order' => 6, 'title' => 'Users', 'url' => "/admin/users", 'icon_class' => 'pe-7s-users']);

        MenuItem::updateOrCreate(['menu_id' => $menu->id, 'type' => 'divider', 'parent_id' => null, 'order' => 7, 'divider_title' => 'System']);
        MenuItem::updateOrCreate(['menu_id' => $menu->id, 'type' => 'item', 'parent_id' => null, 'order' => 8, 'title' => 'Menus', 'url' => "/admin/menus", 'icon_class' => 'pe-7s-menu']);
        MenuItem::updateOrCreate(['menu_id' => $menu->id, 'type' => 'item', 'parent_id' => null, 'order' => 9, 'title' => 'Backups', 'url' => "/admin/backups", 'icon_class' => 'pe-7s-cloud']);
        MenuItem::updateOrCreate(['menu_id' => $menu->id, 'type' => 'item', 'parent_id' => null, 'order' => 10, 'title' => 'Settings', 'url' => "/admin/settings/general", 'icon_class' => 'pe-7s-settings']);
        MenuItem::updateOrCreate(['menu_id' => $menu->id, 'type' => 'divider', 'parent_id' => null, 'order' => 11, 'divider_title' => 'Verification Center']);

        $kyc = MenuItem::updateOrCreate(['menu_id' => $menu->id, 'type' => 'item', 'parent_id' => null, 'order' => 12, 'title' => 'Kyc Requests', 'url' => "#", 'icon_class' => 'pe-7s-settings']);
        MenuItem::updateOrCreate(['menu_id' => $menu->id, 'type' => 'item', 'parent_id' => $kyc->id, 'order' => 1, 'title' => 'Pending Requests', 'url' => "/admin/kycs?status=pending", 'icon_class' => 'pe-7s-settings']);
        MenuItem::updateOrCreate(['menu_id' => $menu->id, 'type' => 'item', 'parent_id' => $kyc->id, 'order' => 2, 'title' => 'Completed Requests', 'url' => "/admin/kycs?status=completed", 'icon_class' => 'pe-7s-settings']);
        MenuItem::updateOrCreate(['menu_id' => $menu->id, 'type' => 'item', 'parent_id' => $kyc->id, 'order' => 3, 'title' => 'Cancelled Requests', 'url' => "/admin/kycs?status=cancelled", 'icon_class' => 'pe-7s-settings']);
    }
}
