<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<pre>
		php artisan make:model User -m


Editar migrate:

public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',45);
            $table->timestamps();
            $table->SoftDeletes();

        });
    }
	</pre>

</body>
</html>