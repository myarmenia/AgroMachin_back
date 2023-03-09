<div class="modal-container">
    <div class="modal" id="confirm-modal" data-status-id="" data-status="">
        <div class="modal-head">
            <h3 class="modal-title">Կարգավիճակի փոփոխություն</h3>
            <div class="close">&#x2715;</div>
        </div>
        <div class="modal-content">
            <div class="modal-confirm-box">
                <p class="modal-confirm-box-title">
                    Դուք ցանկանո՞ւմ եք հաստատել գործողությունը
                </p>

                <div class="modal-confirm-buttons">
                    <button class="btn-transparent" id="modal-deny-btn">Չեղարկել</button>

                    <form action="" id="modal-accept-form" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="delete" id="form_method">
                        <button href="" class="addPage" id="modal-accept-btn">Հաստատել</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
