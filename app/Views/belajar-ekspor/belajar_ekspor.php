<?= $this->extend('layout/app'); ?>
<?= $this->section('content'); ?>

<style>
    /* Artikel Detail Section */
    .artikel-detail-section {
        padding: 0px 15px;
    }

    /* css */
    /* start css search */
    .form button {
        border: none;
        background: none;
        color: #fff;
    }

    /* styling of whole input container */
    .form {
        --timing: 0.3s;
        --width-of-input: 600px;
        --height-of-input: 50px;
        --border-height: 4px;
        --input-bg: #03AADE;
        --border-color: #F2BF02;
        --border-radius: 30px;
        --after-border-radius: 1px;
        position: relative;
        width: var(--width-of-input);
        height: var(--height-of-input);
        display: flex;
        align-items: center;
        padding-inline: 0.8em;
        border-radius: var(--border-radius);
        transition: border-radius 0.5s ease;
        background: var(--input-bg, #fff);
        margin: 0 auto;
    }

    /* styling of Input */
    .input {
        font-size: 0.9rem;
        background-color: transparent;
        width: 100%;
        height: 100%;
        padding-inline: 0.5em;
        padding-block: 0.7em;
        border: none;
        color: #fff;
    }

    .input::placeholder {
        color: #fff;
    }

    /* styling of animated border */
    .form:before {
        content: "";
        position: absolute;
        background: var(--border-color);
        transform: scaleX(0);
        transform-origin: center;
        width: 100%;
        height: var(--border-height);
        left: 0;
        bottom: 0;
        border-radius: 1px;
        transition: transform var(--timing) ease;
    }

    /* Hover on Input */
    .form:focus-within {
        border-radius: var(--after-border-radius);
    }

    input:focus {
        outline: none;
    }

    /* here is code of animated border */
    .form:focus-within:before {
        transform: scale(1);
    }

    /* styling of close button */
    /* == you can click the close button to remove text == */
    .reset {
        border: none;
        background: none;
        opacity: 0;
        visibility: hidden;
    }

    /* close button shown when typing */
    input:not(:placeholder-shown)~.reset {
        opacity: 1;
        visibility: visible;
    }

    /* sizing svg icons */
    .form svg {
        width: 17px;
        margin-top: 3px;
    }

    /* end search css */

    /* start filter css */
    .filter-container {
        display: flex;
        justify-content: flex-end;
        margin-bottom: 20px;
    }

    .menu {
        font-size: 16px;
        line-height: 1.6;
        color: #000000;
        width: fit-content;
        display: flex;
        list-style: none;
        margin-right: 0;
        background-color: #03AADE;
        border-radius: 30px;
    }

    .menu:hover {
        background-color: #F2BF02;
    }

    .menu a {
        text-decoration: none;
        color: inherit;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
    }

    .menu .link {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        padding: 12px 36px;
        border-radius: 30px;
        overflow: hidden;
        transition: all 0.48s cubic-bezier(0.23, 1, 0.32, 1);
    }

    .menu .link::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #F2BF02;
        z-index: -1;
        transform: scaleX(0);
        transform-origin: left;
        transition: transform 0.48s cubic-bezier(0.23, 1, 0.32, 1);
    }

    .menu .link svg {
        width: 14px;
        height: 14px;
        fill: #ffffff;
        transition: all 0.48s cubic-bezier(0.23, 1, 0.32, 1);
    }

    .menu .item {
        position: relative;
    }

    .menu .item .submenu {
        display: flex;
        background-color: #fff;
        flex-direction: column;
        align-items: center;
        position: absolute;
        top: 100%;
        border-radius: 0 0 30px 30px;
        left: 0;
        width: 100%;
        overflow: hidden;
        border: 1px solid #cccccc;
        opacity: 0;
        visibility: hidden;
        transform: translateY(-12px);
        transition: all 0.48s cubic-bezier(0.23, 1, 0.32, 1);
        z-index: 1;
        pointer-events: none;
        list-style: none;
    }

    .menu .item:hover .submenu {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
        pointer-events: auto;
        border-top: transparent;
        border-color: #03AADE;
    }

    .menu .item:hover .link {
        color: #ffffff;
        border-radius: 30px 30px 0 0;
    }

    .menu .item:hover .link::after {
        transform: scaleX(1);
        transform-origin: right;
    }

    .menu .item:hover .link svg {
        fill: #ffffff;
        transform: rotate(-180deg);
    }

    .submenu .submenu-item {
        width: 100%;
        transition: all 0.48s cubic-bezier(0.23, 1, 0.32, 1);
    }

    .submenu .submenu-link {
        display: block;
        padding: 12px 24px;
        width: 100%;
        position: relative;
        text-align: center;
        transition: all 0.48s cubic-bezier(0.23, 1, 0.32, 1);
    }

    .submenu .submenu-item:last-child .submenu-link {
        border-bottom: none;
    }

    .submenu .submenu-link::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        transform: scaleX(0);
        width: 100%;
        height: 100%;
        background-color: #03AADE;
        z-index: -1;
        transform-origin: left;
        transition: transform 0.48s cubic-bezier(0.23, 1, 0.32, 1);
    }

    .submenu .submenu-link:hover:before {
        transform: scaleX(1);
        transform-origin: right;
    }

    .submenu .submenu-link:hover {
        color: #ffffff;
    }

    /* end filter css */

    .card {
        transition: box-shadow 0.3s ease, transform 0.3s ease;
    }

    .card:hover {
        box-shadow: 0px 0px 25px #03AADE !important;
        transform: translateY(-5px) !important;
    }

    .badge {
        font-weight: normal;
        color: #fff;
        font-size: 0.9rem;
        padding: 0.5em 1em;
        border-radius: 3px;
        background-color: #03AADE;
        width: auto;
        /* Membuat lebar badge mengikuti panjang teks */
        display: inline-block;
        /* Menjamin badge sesuai dengan teks */
    }

    .btn-custom {
        background-color: #03AADE;
        text-align: center;
        color: #ffffff;
    }

    .btn-custom:hover {
        background-color: #F2BF02;
        color: #ffffff;
    }

    .card-text {
        color: #03AADE;
    }

    .tampilkan {
        color: #03AADE;
    }

    /*responsive mobile*/
    @media (max-width: 768px) {
        .form {
            --width-of-input: 250px;
            --height-of-input: 45px;
        }

        .filter-container {
            padding: 0px 15px;
            display: flex;
            justify-content: flex-end;
            margin-bottom: 20px;
        }

        .menu {
            font-size: 14px;
            line-height: 1.4;
            color: #000000;
            width: fit-content;
            display: flex;
            list-style: none;
            margin-right: 0;
            background-color: #03AADE;
            border-radius: 30px;
        }
    }
</style>

<!-- judul -->
<div class="artikel-detail-section py-5" style="text-align: center;">
    <h2 class="text-custom-title"><?= lang('Blog.belajarEksporTitle') ?></h2>
    <p class="text-custom-paragraph mt-2">
        <?= lang('Blog.belajarEksporSubtitle') ?>
    </p>
    <!-- Search Bar Start -->
    <form class="form mt-4" action="<?= base_url('id/belajar-ekspor/search') ?>" method="GET">
        <button type="submit">
            <svg width="17" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-labelledby="search">
                <path d="M7.667 12.667A5.333 5.333 0 107.667 2a5.333 5.333 0 000 10.667zM14.334 14l-2.9-2.9" stroke="currentColor" stroke-width="1.333" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
        </button>
        <input class="input" name="keyword" placeholder="<?= lang('Blog.belajarEksporCTA') ?>" required="" type="text" autocomplete="off">
    </form>
    <button class="reset" type="reset">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
    </button>
    <!-- Search Bar End -->
</div>

<section class="container">
    <!-- start filter -->
    <div class="filter-container">
        <div class="menu">
            <div class="item">
                <a href="#" class="link text-light">
                    <span><?= lang('Blog.filterCategory') ?></span>
                    <svg viewBox="0 0 360 360" xml:space="preserve">
                        <g id="SVGRepo_iconCarrier">
                            <path
                                id="XMLID_225_"
                                d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393 c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393 s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z"></path>
                        </g>
                    </svg>
                </a>
                <div class="submenu">
                    <!-- Tampilkan kategori dari database -->
                    <?php if (!empty($kategori_belajar_ekspor)): ?>
                        <!-- Tampilkan link ke semua kategori -->
                        <div class="submenu-item">
                            <a href="<?= base_url(($lang === 'en' ? 'en/export-learning' : '/id/belajar-ekspor')); ?>" class="submenu-link <?= empty($active_category) ? 'active' : ''; ?>">
                                <?= lang('Blog.filterAllPlaceholder') ?>
                            </a>
                        </div>
                        <!-- Loop kategori -->
                        <?php foreach ($kategori_belajar_ekspor as $item): ?>
                            <div class="submenu-item">
                                <a href="<?= base_url(($lang === 'en' ? 'en/category' : 'id/kategori') . '/' . ($lang === 'en' ? $item['slug_en'] : $item['slug'])); ?>" class="submenu-link <?= $active_category == $item['id_kategori_belajar_ekspor'] ? 'active' : ''; ?>">
                                    <?= $lang === 'en' ? $item['nama_kategori_en'] : $item['nama_kategori']; ?>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <div class="submenu-item">
                            <span class="submenu-link"><?= lang('Blog.noCategory') ?></span>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- end filter -->

    <div class="row container g-4 mb-5">
        <?php if (!empty($belajar_ekspor)): ?>
            <!-- Menampilkan artikel sesuai kategori -->
            <?php foreach ($belajar_ekspor as $item): ?>
                <!-- Card -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <img src="<?= base_url('/img/' . $item['foto_belajar_ekspor']); ?>" class="card-img-top img-fluid" alt="<?= ($lang == 'en') ? $item['judul_belajar_ekspor_en'] : $item['judul_belajar_ekspor']; ?>" style="object-fit: cover; object-position: center; aspect-ratio: 16/9;" loading="lazy">
                        <div class="card-body d-flex flex-column">
                            <div class="mb-3 d-flex justify-content-between align-items-center">
                                <p class="card-text mb-0" style="font-size: 1rem;"><?= date('d F Y', strtotime($item['created_at'])); ?></p>
                                <span class="badge"><?= $item['nama_kategori']; ?></span>
                            </div>
                            <h5 class="card-title" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">
                                <?= ($lang == 'en') ? $item['judul_belajar_ekspor_en'] : $item['judul_belajar_ekspor']; ?>
                            </h5>
                            <p style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">
                                <?= ($lang == 'en') ? $item['deskripsi_belajar_ekspor_en'] : $item['deskripsi_belajar_ekspor']; ?>
                            </p>
                            <a href="<?= base_url(($lang == 'en' ? 'en/export-learning/' : 'id/belajar-ekspor/') . (($lang == 'en') ? $item['slug_en'] : $item['slug'])); ?>" class="btn btn-custom mt-auto" style="width: 100%; display: block; text-align: center;">
                                <?= lang('Blog.readMore') ?>
                            </a>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="col-12">
                <div class="alert alert-info text-center" role="alert">
                    <?= lang('Blog.noContent') ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <div class="lebih mt-5" style="display: flex; justify-content: center;">
        <a href="#" class="btn btn-custom mt-auto" style="min-width: 50px; text-align: center;"><?= lang('Blog.seeMore') ?> </a>
    </div>
</section>

<?= $this->endSection(); ?>