<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(DataRowsTableCustomizationsSeeder::class);
        $this->call(DataTypesTableCustomizationsSeeder::class);
        $this->call(MenuItemsTableCustomizationsSeeder::class);
        $this->call(MenusTableCustomizationsSeeder::class);
        $this->call(MunicipiosTableCustomizationsSeeder::class);
        $this->call(ParroquiasTableCustomizationsSeeder::class);
        $this->call(PasswordResetsTableCustomizationsSeeder::class);
        $this->call(PermissionRoleTableCustomizationsSeeder::class);
        $this->call(PermissionsTableCustomizationsSeeder::class);
        $this->call(RolesTableCustomizationsSeeder::class);
        $this->call(SettingsTableCustomizationsSeeder::class);
        $this->call(StatesTableCustomizationsSeeder::class);
        $this->call(TranslationsTableCustomizationsSeeder::class);
        $this->call(UserRolesTableCustomizationsSeeder::class);
        $this->call(UsersTableCustomizationsSeeder::class);
    }
}
