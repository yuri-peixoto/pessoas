<h1>Novo Usuários</h1>

<form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
    @include('users.partials.form')
</form>
