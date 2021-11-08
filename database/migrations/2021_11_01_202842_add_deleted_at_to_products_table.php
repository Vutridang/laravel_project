<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeletedAtToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->SoftDeletes('deleted_at', 0);
            //khi chạy migration ta tạo ra cột deleted_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('deleted_at');
            //Sau khi xóa muốn trở lại trạng thái trước khi migration thì ta sử dụng dropColumn. Vì khi chạy migration đầu tiên ta tạo cột deleted_at nên sau đó ta xóa nó đi bằng dropColumn
        });
    }
}
