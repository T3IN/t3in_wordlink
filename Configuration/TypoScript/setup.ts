
# Module configuration
module.tx_t3inwordlink_web_t3inwordlinklink {
    persistence {
        storagePid = {$module.tx_t3inwordlink_link.persistence.storagePid}
    }
    view {
        templateRootPaths.0 = EXT:t3in_wordlink/Resources/Private/Backend/Templates/
        templateRootPaths.1 = {$module.tx_t3inwordlink_link.view.templateRootPath}
        partialRootPaths.0 = EXT:t3in_wordlink/Resources/Private/Backend/Partials/
        partialRootPaths.1 = {$module.tx_t3inwordlink_link.view.partialRootPath}
        layoutRootPaths.0 = EXT:t3in_wordlink/Resources/Private/Backend/Layouts/
        layoutRootPaths.1 = {$module.tx_t3inwordlink_link.view.layoutRootPath}
    }
}
