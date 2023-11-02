<?php

use App\Enums\ParcelStatus;

return array(
    ParcelStatus::PENDING                                => 'En attente',
    ParcelStatus::PICKUP_ASSIGN                          => 'Ramassage assigné',
    ParcelStatus::PICKUP_ASSIGN_CANCEL                   => 'Annulation de ramassage assigné',
    ParcelStatus::PICKUP_RE_SCHEDULE_CANCEL              => 'Annulation de la reprogrammation du ramassage',
    ParcelStatus::PICKUP_RE_SCHEDULE                     => 'Reprogrammation du ramassage',
    ParcelStatus::RECEIVED_BY_PICKUP_MAN                 => 'Colis reçu par le livreur de ramassage',
    ParcelStatus::RECEIVED_BY_PICKUP_MAN_CANCEL          => 'Annulation de la réception par le livreur de ramassage',
    ParcelStatus::RECEIVED_WAREHOUSE                     => 'Colis reçu à l\'entrepôt',
    ParcelStatus::RECEIVED_WAREHOUSE_CANCEL              => 'Annulation de la réception à l\'entrepôt',
    ParcelStatus::RECEIVED_BY_HUB_CANCEL                 => 'Annulation de la réception par le hub',
    ParcelStatus::TRANSFER_TO_HUB                        => 'Transfert au hub',
    ParcelStatus::TRANSFER_TO_HUB_CANCEL                 => 'Annulation du transfert au hub',
    ParcelStatus::RECEIVED_BY_HUB                        => 'Reçu par le hub',
    ParcelStatus::DELIVERY_MAN_ASSIGN                    => 'Livreur affecté',
    ParcelStatus::DELIVERY_MAN_ASSIGN_CANCEL             => 'Annulation de l\'affectation du livreur',
    ParcelStatus::DELIVERY_RE_SCHEDULE_CANCEL            => 'Annulation de la reprogrammation de la livraison',
    ParcelStatus::DELIVERY_RE_SCHEDULE                   => 'Reprogrammation de la livraison',
    ParcelStatus::PARTIAL_DELIVERED_CANCEL               => 'Annulation de la livraison partielle',
    ParcelStatus::RETURN_TO_COURIER                      => 'Retour au coursier',
    ParcelStatus::RETURN_TO_COURIER_CANCEL               => 'Annulation du retour au coursier',
    ParcelStatus::PARTIAL_DELIVERED                      => 'Livraison partielle',
    ParcelStatus::DELIVERED                              => 'Livré',
    ParcelStatus::DELIVERED_CANCEL                       => 'Annulation de la livraison',
    ParcelStatus::RETURN_ASSIGN_TO_MERCHANT_CANCEL       => 'Annulation du retour assigné au marchand',
    ParcelStatus::RETURN_ASSIGN_TO_MERCHANT              => 'Retour assigné au marchand',
    ParcelStatus::RETURN_MERCHANT_RE_SCHEDULE_CANCEL     => 'Annulation de la reprogrammation du retour assigné au marchand',
    ParcelStatus::RETURN_MERCHANT_RE_SCHEDULE            => 'Reprogrammation du retour assigné au marchand',
    ParcelStatus::RETURN_RECEIVED_BY_MERCHANT            => 'Retour reçu par le marchand',
    ParcelStatus::RETURN_RECEIVED_BY_MERCHANT_CANCEL     => 'Annulation de la réception du retour par le marchand',
    ParcelStatus::DELIVER                                => 'Livraison',
    ParcelStatus::RETURN_WAREHOUSE                       => 'Retour à l\'entrepôt',
    ParcelStatus::ASSIGN_MERCHANT                        => 'Affecter un marchand',
    ParcelStatus::RETURNED_MERCHANT                      => 'Retourné au marchand',

);