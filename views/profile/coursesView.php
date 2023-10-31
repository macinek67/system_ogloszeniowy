<form class="bg-white" method="post" action="">

    <div class="col bg-light bg-gradient ps-3 pt-2">
        <label class="h5 text-info-emphasis w-75">Kursy, szkolenia, certyfikaty</label>
        <a onclick="ShowUserSection()" class="float-end me-2 w-10 text-black">
            <i class="bi bi-plus-lg"></i><label class="h6 ps-1 d-xl-inline d-lg-inline d-md-inline d-sm-inline d-none">Dodaj</label>
        </a>
    </div>

    <div class="userSectionEditVisible col p-3">
        <div class="form-text">Potwierdź swoje kompetencje. Certyfikaty ukończenia niektórych kursów i szkoleń są wysoko cenione przez pracodawców.</div>
    </div>

    <div class="userSectionEditHidden col p-3">
        <div class="col d-xl-flex d-lg-flex d-md-flex d-column">
            <label class="h6 m-auto col-md-2">Nazwa:</label>
            <input type="text" placeholder="Nazwa" class="form-control">
        </div>
        <div class="col d-xl-flex d-lg-flex d-md-flex d-column pt-3">
            <label class="h6 m-auto col-md-2">Organizator:</label>
            <input type="text" placeholder="Organizator" class="form-control">
        </div>
        <div class="col d-xl-flex d-lg-flex d-md-flex d-column pt-3">
            <label class="h6 m-auto col-md-2">Okres:</label>
            <div class="col-md-10 col-12">
            <select class="col-5"></select>
            <select class="col-5 ms-1"></select>
            </div>
        </div>
        <div class="col-12 text-end pt-4 pb-2">
            <a onclick="HideUserSection()" class="btn btn-secondary rounded-0 me-1">Anuluj</a>
            <button type="submit" class="btn btn-primary rounded-0">Zapisz</button>
        </div>
    </div>

</form>