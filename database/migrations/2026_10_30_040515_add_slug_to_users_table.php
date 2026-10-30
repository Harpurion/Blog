<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Query\Builder;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (! Schema::hasColumn('users', 'slug')) {
            Schema::table('users', function (Blueprint $table): void {
                $table->string('slug')->nullable()->unique('users_slug_unique');
            });
        }

        DB::table('users')
            ->where(function (Builder $query): void {
                $query->whereNull('slug')->orWhere('slug', '');
            })
            ->orderBy('id')
            ->chunkById(100, function (Collection $users): void {
                foreach ($users as $user) {
                    $baseSlug = Str::slug($user->name);
                    $baseSlug = $baseSlug !== '' ? $baseSlug : 'user-'.$user->id;
                    $slug = $baseSlug;
                    $suffix = 1;

                    while (DB::table('users')->where('slug', $slug)->exists()) {
                        $slug = $baseSlug.'-'.$suffix;
                        $suffix++;
                    }

                    DB::table('users')
                        ->where('id', $user->id)
                        ->update(['slug' => $slug]);
                }
            });

        Schema::table('users', function (Blueprint $table): void {
            $table->string('slug')->nullable(false)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasColumn('users', 'slug')) {
            Schema::table('users', function (Blueprint $table): void {
                $table->dropUnique('users_slug_unique');
                $table->dropColumn('slug');
            });
        }
    }
};
