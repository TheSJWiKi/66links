<?php defined('ALTUMCODE') || die() ?>

<div class="container">
    <?= \Altum\Alerts::output_alerts() ?>

    <nav aria-label="breadcrumb">
        <ol class="custom-breadcrumbs small">
            <li><a href="<?= url('tools') ?>"><?= l('tools.breadcrumb') ?></a> <i class="fa fa-fw fa-angle-right"></i></li>
            <li class="active" aria-current="page"><?= l('tools.html_minifier.name') ?></li>
        </ol>
    </nav>

    <div class="row mb-4">
        <div class="col-12 col-xl d-flex align-items-center mb-3 mb-xl-0">
            <h1 class="h4 m-0"><?= l('tools.html_minifier.name') ?></h1>

            <div class="ml-2">
                <span data-toggle="tooltip" title="<?= l('tools.html_minifier.description') ?>">
                    <i class="fa fa-fw fa-info-circle text-muted"></i>
                </span>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">

            <form action="" method="post" role="form">
                <input type="hidden" name="token" value="<?= \Altum\Csrf::get() ?>" />

                <div class="form-group">
                    <label for="html"><i class="fab fa-fw fa-html5 fa-sm text-muted mr-1"></i> <?= l('tools.html_minifier.html') ?></label>
                    <textarea id="html" name="html" class="form-control <?= \Altum\Alerts::has_field_errors('html') ? 'is-invalid' : null ?>" required="required"><?= e($data->values['html']) ?></textarea>
                    <?= \Altum\Alerts::output_field_error('html') ?>
                </div>

                <button type="submit" name="submit" class="btn btn-block btn-primary"><?= l('global.submit') ?></button>
            </form>

        </div>
    </div>

    <?php if(isset($data->result)): ?>
        <div class="mt-4">
            <div class="table-responsive table-custom-container">
                <table class="table table-custom">
                    <tbody>
                        <tr>
                            <td class="font-weight-bold">
                                <?= l('tools.html_minifier.result.html_characters') ?>
                            </td>
                            <td class="text-nowrap <?= $data->html_characters > $data->minified_html_characters ? 'text-danger' : 'text-success'; ?>">
                                <?= nr($data->html_characters) ?>
                            </td>
                        </tr>

                        <tr>
                            <td class="font-weight-bold">
                                <?= l('tools.html_minifier.result.minified_html_characters') ?>
                            </td>
                            <td class="text-nowrap <?= $data->html_characters >= $data->minified_html_characters ? 'text-success' : 'text-danger'; ?>">
                                <?= nr($data->minified_html_characters) ?> <?= '(' . nr(get_percentage_difference($data->html_characters, $data->minified_html_characters), 2) . '%)' ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="mt-4">
            <div class="card">
                <div class="card-body">

                    <div class="form-group">
                        <div class="d-flex justify-content-between align-items-center">
                            <label for="result"><?= l('tools.html_minifier.result') ?></label>
                            <div>
                                <button
                                        type="button"
                                        class="btn btn-link text-secondary"
                                        data-toggle="tooltip"
                                        title="<?= l('global.clipboard_copy') ?>"
                                        aria-label="<?= l('global.clipboard_copy') ?>"
                                        data-copy="<?= l('global.clipboard_copy') ?>"
                                        data-copied="<?= l('global.clipboard_copied') ?>"
                                        data-clipboard-target="#result"
                                        data-clipboard-text
                                >
                                    <i class="fa fa-fw fa-sm fa-copy"></i>
                                </button>
                            </div>
                        </div>
                        <textarea id="result" class="form-control"><?= htmlspecialchars($data->result, ENT_QUOTES, 'UTF-8') ?></textarea>
                    </div>

                </div>
            </div>
        </div>
    <?php endif ?>

<?= $this->views['extra_content'] ?>

    <?= $this->views['similar_tools'] ?>
</div>

<?php include_view(THEME_PATH . 'views/partials/clipboard_js.php') ?>
