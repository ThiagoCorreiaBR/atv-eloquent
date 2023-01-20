<div class="min-vh-100 d-flex justify-content-center align-items-center">
 
    <form action="client/store" method="POST" style="width:400px">

        @csrf

        <h1>Login</h1>

        <input class="form-control my-3" name="name" type="text" placeholder="Nome">

        <input class="form-control my-3" name="email" type="email" placeholder="E-mail">

        <input class="form-control mb-3" name="phone" type="number" placeholder="Telefone">

        <button class="btn btn-outline-primary w-100 mb-3" type="submit">Enviar</button>

    </form>

</div>