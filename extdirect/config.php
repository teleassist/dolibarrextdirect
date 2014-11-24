<?php

// tell Ext what php methods are available

$API = array(
    'ExtDirectSociete'=>array(
        'methods'=>array(
            'readSociete'=>array(
                    'len'=>1
            ),
            'createSociete'=>array(
                    'len'=>1
            ),
            'updateSociete'=>array(
                    'len'=>1
            ),
            'destroySociete'=>array(
                    'len'=>1
            ),
            'readSocieteList'=>array(
                    'len'=>1
            ),
            'getTowns'=>array(
                    'len'=>1
            ),
            'getCategories'=>array(
                    'len'=>1
            ),
            'readStComm'=>array(
                    'len'=>1
            ),
            'readProspectLevel'=>array(
                    'len'=>1
            ),
            'readPaymentConditions'=>array(
                    'len'=>1
            ),
            'readPaymentTypes'=>array(
                    'len'=>1
            ),
            'readCountryConstants'=>array(
                    'len'=>1
            ),
            'readStateConstants'=>array(
                    'len'=>1
            )
        )
    ),
    'ExtDirectContact'=>array(
        'methods'=>array(
            'readContact'=>array(
                    'len'=>1
            ),
            'readContactList'=>array(
                    'len'=>1
            ),
            'createContact'=>array(
                    'len'=>1
            ),
            'updateContact'=>array(
                    'len'=>1
            ),
            'destroyContact'=>array(
                    'len'=>1
            )
        )
    ),
    'ExtDirectActionComm'=>array(
        'methods'=>array(
            'readAction'=>array(
                    'len'=>1
            ),
            'readActionList'=>array(
                    'len'=>1
            ),
            'createAction'=>array(
                    'len'=>1
            ),
            'updateAction'=>array(
                    'len'=>1
            ),
            'destroyAction'=>array(
                    'len'=>1
            ),
            'getAllUsers'=>array(
                    'len'=>1
            )
        )
    ),
    'ExtDirectCategorie'=>array(
        'methods'=>array(
            'readCategorie'=>array(
                'len'=>1
            ),
            'createCategorie'=>array(
                'len'=>1
            ),
            'updateCategorie'=>array(
                'len'=>1
            ),
            'destroyCategorie'=>array(
                'len'=>1
            ),
            'readCategorieList'=>array(
                'len'=>1
            )
        )
    ),
    'ExtDirectProduct'=>array(
        'methods'=>array(
            'readProduct'=>array(
                    'len'=>1
            ),
            'createProduct'=>array(
                    'len'=>1
            ),
            'updateProduct'=>array(
                    'len'=>1
            ),
            'destroyProduct'=>array(
                    'len'=>1
            ),
            'readProductList'=>array(
                    'len'=>1
            ),
            'readProductBatchList'=>array(
                    'len'=>1
            )
        )
    ),
    'ExtDirectTranslate'=>array(
        'methods'=>array(
            'setDomain'=>array(
                    'len'=>2
            ),
            'load'=>array(
                    'len'=>1
            )
        )
    ),
    'ExtDirectFormProduct'=>array(
        'methods'=>array(
            'readWarehouses'=>array(
                    'len'=>1
            ),
            'readPriceIndex'=>array(
                    'len'=>1
            ),
            'readProductType'=>array(
                    'len'=>1
            ),
            'readBarcodeType'=>array(
                    'len'=>1
            )
        )
    ),
    'ExtDirectAuthenticate'=>array(
        'methods'=>array(
            'createAuthentication'=>array(
                    'len'=>1
            ),
            'readAuthentication'=>array(
                    'len'=>1
            ),
            'updateAuthentication'=>array(
                    'len'=>1
            ),
            'destroyAuthentication'=>array(
                    'len'=>1
            )
        )
    ),
    'ExtDirectActivities'=>array(
        'methods'=>array(
            'createActivity'=>array(
                    'len'=>1
            ),
            'readActivities'=>array(
                    'len'=>1
            ),
            'updateActivity'=>array(
                    'len'=>1
            ),
            'destroyActivity'=>array(
                    'len'=>1
            )
        )
    ),
    'ExtDirectCommande'=>array(
        'methods'=>array(
            'readOrder'=>array(
                    'len'=>1
            ),
            'createOrder'=>array(
                    'len'=>1
            ),
            'updateOrder'=>array(
                    'len'=>1
            ),
            'destroyOrder'=>array(
                    'len'=>1
            ),
            'readOrdelList'=>array( // deprecated
                    'len'=>1
            ),
            'readOrderList'=>array(
                    'len'=>1
            ),
            'readOrderStatus'=>array(
                    'len'=>1
            ),
            'readOrderLine'=>array(
                    'len'=>1
            ),
            'createOrderLine'=>array(
                    'len'=>1
            ),
            'updateOrderLine'=>array(
                    'len'=>1
            ),
            'destroyOrderLine'=>array(
                    'len'=>1
            ),
            'readAvailabilityCodes'=>array(
                    'len'=>1
            )
        )
    ),
    'ExtDirectExpedition'=>array(
        'methods'=>array(
            'readShipment'=>array(
                    'len'=>1
            ),
            'createShipment'=>array(
                    'len'=>1
            ),
            'updateShipment'=>array(
                    'len'=>1
            ),
            'destroyShipment'=>array(
                    'len'=>1
            ),
            'readShipmentLine'=>array(
                    'len'=>1
            ),
            'createShipmentLine'=>array(
                    'len'=>1
            ),
            'updateShipmentLine'=>array(
                    'len'=>1
            ),
            'destroyShipmentLine'=>array(
                    'len'=>1
            )
        )
    )
);