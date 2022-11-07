<footer class="bg-default color-font-default">
    <div class="container pt-3 pb-3">
        <div class="row">
            <div class="col-4">
                <img class="footer-logo mt-2 mb-2" src="{{ asset('assets/images/' . $logoImg) }}" alt="Logo da Loja">
                <h4>Endereço</h4>
                <p>Rua Nª Senhora de Lourdes, 1484, Gruta</p>
            </div>
            <div class="col-4 mt-3">
                <h4>Telefones</h4>
                <p>(49) 9 9110-0471</p>
            </div>
            <div class="col-4 mt-3">
                <h4>Horário de Atendimento</h4>
                <p>08:00 às 18:00</p>
            </div>
        </div>
    </div>
    <div class="container pb-5" id="footer-end">
        <div class="row pt-3">
            <div class="col-4">
                &copy; {{ $nomeLoja }} <br>
                {{ date('Y') }} - Todos os direitos reservados
            </div>
            <div class="col-4 d-flex justify-content-center">
                Redes Sociais
            </div>
            <div class="col-4 d-flex justify-content-end">
                Feito por mim mesmo
            </div>
        </div>
    </div>
</footer>
