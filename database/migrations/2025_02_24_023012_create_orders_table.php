<?php

declare(strict_types=1);

use App\Enums\OrderStatus;
use App\Models\Customer;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table): void {
            $table->id();
            $table->foreignIdFor(Customer::class)->constrained();
            $table->decimal('total', 8, 2);
            $table->enum('status', array_column(OrderStatus::cases(), 'value'))->default(OrderStatus::Pending);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
