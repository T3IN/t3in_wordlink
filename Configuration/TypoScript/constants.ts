
module.tx_t3inwordlink_link {
    view {
        # cat=module.tx_t3inwordlink_link/file; type=string; label=Path to template root (BE)
        templateRootPath = EXT:t3in_wordlink/Resources/Private/Backend/Templates/
        # cat=module.tx_t3inwordlink_link/file; type=string; label=Path to template partials (BE)
        partialRootPath = EXT:t3in_wordlink/Resources/Private/Backend/Partials/
        # cat=module.tx_t3inwordlink_link/file; type=string; label=Path to template layouts (BE)
        layoutRootPath = EXT:t3in_wordlink/Resources/Private/Backend/Layouts/
    }
    persistence {
        # cat=module.tx_t3inwordlink_link//a; type=string; label=Default storage PID
        storagePid =
    }
}
