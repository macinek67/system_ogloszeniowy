<div class="mb-3 pt-lg-0 pt-3">
    <label class="h5 fw-bolder text-primary-emphasis">Znaleziono - </label>
    <label class="fw-bolder"><?php echo $data["searchedAnnouncementsCount"]; ?> oferty pracy</label>
</div>

<!-- <form id="sortPanelForm" class="bg-white shadow-sm rounded-2 border" method="post" action="<?php echo ROOT_URL . "praca/changePage"; ?>">
    <div class="ps-sm-5 ps-1 pe-sm-3 pe-1 d-flex pt-2 pb-2 form-row align-items-center">
        <div class="col">
            <select class="form-select fw-bolder text-primary-emphasis w-auto" aria-label="Default select example">
                <option selected disabled>Najnowsze</option>
                <option value="1" class="fw-bold">Najstarsze</option>
                <option value="2" class="fw-bold">Popularne</option>
            </select>
        </div>
        <div class="col">
            <div class="float-end d-flex align-items-center">
                <input name="page" onchange="changePage()" type="number" class="form-control searchPaginationButton" value="1" min="1">
                <label class="ms-2 me-2 text-primary-emphasis">z</label>
                <label class="me-2 text-primary-emphasis"><?php echo $data["pages"]; ?></label>
                <input type="hidden" name="filters" value="<?php echo $data["filters"]; ?>">
            </div>
        </div>
    </div>
</form> -->

<style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    .searchPaginationButton {
        width: 40px;
        font-size: 90%;
    }
</style>

<script>
    function changePage()
    {
        //document.getElementById("sortPanelForm").submit();
    }
</script>