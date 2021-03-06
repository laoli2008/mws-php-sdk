<?php

namespace Amazon\MWS\FBAOutbound;

use Amazon\MWS\Client as BaseClient;

use Amazon\MWS\FBAOutbound\Exception as FBAOutboundException;
use Amazon\MWS\FBAOutbound\Model\CancelFulfillmentOrderRequest;
use Amazon\MWS\FBAOutbound\Model\CancelFulfillmentOrderResponse;
use Amazon\MWS\FBAOutbound\Model\CreateFulfillmentOrderRequest;
use Amazon\MWS\FBAOutbound\Model\CreateFulfillmentOrderResponse;
use Amazon\MWS\FBAOutbound\Model\GetFulfillmentOrderRequest;
use Amazon\MWS\FBAOutbound\Model\GetFulfillmentOrderResponse;
use Amazon\MWS\FBAOutbound\Model\GetFulfillmentPreviewRequest;
use Amazon\MWS\FBAOutbound\Model\GetFulfillmentPreviewResponse;
use Amazon\MWS\FBAOutbound\Model\GetPackageTrackingDetailsRequest;
use Amazon\MWS\FBAOutbound\Model\GetPackageTrackingDetailsResponse;
use Amazon\MWS\FBAOutbound\Model\GetServiceStatusRequest;
use Amazon\MWS\FBAOutbound\Model\GetServiceStatusResponse;
use Amazon\MWS\FBAOutbound\Model\ListAllFulfillmentOrdersByNextTokenRequest;
use Amazon\MWS\FBAOutbound\Model\ListAllFulfillmentOrdersByNextTokenResponse;
use Amazon\MWS\FBAOutbound\Model\ListAllFulfillmentOrdersRequest;
use Amazon\MWS\FBAOutbound\Model\ListAllFulfillmentOrdersResponse;
use Amazon\MWS\FBAOutbound\Model\ResponseHeaderMetadata;
use Amazon\MWS\FBAOutbound\Model\UpdateFulfillmentOrderRequest;
use Amazon\MWS\FBAOutbound\Model\UpdateFulfillmentOrderResponse;

/**
 * Client is an implementation of FBAOutboundInterface
 */
class Client extends BaseClient implements FBAOutboundInterface
{
    const SERVICE_VERSION    = '2010-10-01';
    const MWS_CLIENT_VERSION = '2016-02-01';

    /**
     * Cancel Fulfillment Order
     * Request for Amazon to no longer attempt to fulfill an existing
     *   fulfillment order. Amazon will attempt to stop fulfillment of all
     *   items that haven't already shipped, but cannot guarantee success.
     *   Note: Items that have already shipped cannot be cancelled.
     *
     * @param mixed $request array of parameters for CancelFulfillmentOrder request or CancelFulfillmentOrder object itself
     * @see CancelFulfillmentOrderRequest
     * @return CancelFulfillmentOrderResponse
     *
     * @throws Exception
     */
    public function cancelFulfillmentOrder($request)
    {
        if (!($request instanceof CancelFulfillmentOrderRequest)) {
            $request = new CancelFulfillmentOrderRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'CancelFulfillmentOrder';
        $httpResponse = $this->_invoke($parameters);

        $response = CancelFulfillmentOrderResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert CancelFulfillmentOrderRequest to name value pairs
     */
    private function _convertCancelFulfillmentOrder($request)
    {
        $parameters = array();
        $parameters['Action'] = 'CancelFulfillmentOrder';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetSellerFulfillmentOrderId()) {
            $parameters['SellerFulfillmentOrderId'] =  $request->getSellerFulfillmentOrderId();
        }

        return $parameters;
    }

    /**
     * Create Fulfillment Order
     * The SellerFulfillmentOrderId must be unique for all fulfillment
     *   orders created by the seller. If your system already has a
     *   unique order identifier, then that may be a good value to put in
     *   this field.
     *
     *   This DisplayableOrderDateTime will appear as the "order date" in
     *   recipient-facing materials such as the packing slip.  The format
     *   must be timestamp.
     *
     *
     *   The DisplayableOrderId will appear as the "order id" in those
     *   materials, and the DisplayableOrderComment will appear as well.
     *
     *   ShippingSpeedCategory is the Service Level Agreement for how long it
     *   will take a shipment to be transported from the fulfillment center
     *   to the recipient, once shipped. no default.
     *   The following shipping speeds are available for US domestic:
     *    * Standard, 3-5 business days
     *    * Expedited, 2 business days
     *    * Priority, 1 business day
     *
     *   Shipping speeds may vary elsewhere.  Please consult your manual for published SLAs.
     *
     *
     *   DestinationAddress is the address the items will be shipped to.
     *
     *   FulfillmentPolicy indicates how unfulfillable items should be
     *   handled. default is FillOrKill.
     *    * FillOrKill if any item is determined to be unfulfillable
     *      before any items have started shipping, the entire order is
     *      considered unfulfillable.  Once any part of the order has
     *      started shipping, as much of the order as possible will be
     *      shipped.
     *    * FillAll never consider any item unfulfillable.  Items must
     *      either be fulfilled or merchant-cancelled.
     *    * FillAllAvailable fulfill as much of the order as possible.
     *
     *   FulfillmentMethod indicates the intended recipient channel for the
     *   order whether it be a consumer order or inventory return.
     *   default is Consumer.
     *   The available methods to fulfill a given order:
     *    * Consumer indicates a customer order, this is the default.
     *    * Removal indicates that the inventory should be returned to the
     *      specified destination address.
     *
     *
     *   NotificationEmailList can be used to provide a list of e-mail
     *   addresses to receive ship-complete e-mail notifications. These
     *   e-mails are customer-facing e-mails sent by FBA on behalf of
     *   the seller.
     *
     * @param mixed $request array of parameters for CreateFulfillmentOrder request or CreateFulfillmentOrder object itself
     * @see CreateFulfillmentOrderRequest
     * @return CreateFulfillmentOrderResponse
     *
     * @throws Exception
     */
    public function createFulfillmentOrder($request)
    {
        if (!($request instanceof CreateFulfillmentOrderRequest)) {
            $request = new CreateFulfillmentOrderRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'CreateFulfillmentOrder';
        $httpResponse = $this->_invoke($parameters);

        $response = CreateFulfillmentOrderResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert CreateFulfillmentOrderRequest to name value pairs
     */
    private function _convertCreateFulfillmentOrder($request)
    {
        $parameters = array();
        $parameters['Action'] = 'CreateFulfillmentOrder';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }
        if ($request->isSetSellerFulfillmentOrderId()) {
            $parameters['SellerFulfillmentOrderId'] =  $request->getSellerFulfillmentOrderId();
        }
        if ($request->isSetDisplayableOrderId()) {
            $parameters['DisplayableOrderId'] =  $request->getDisplayableOrderId();
        }
        if ($request->isSetDisplayableOrderDateTime()) {
            $parameters['DisplayableOrderDateTime'] =  $request->getDisplayableOrderDateTime();
        }
        if ($request->isSetDisplayableOrderComment()) {
            $parameters['DisplayableOrderComment'] =  $request->getDisplayableOrderComment();
        }
        if ($request->isSetShippingSpeedCategory()) {
            $parameters['ShippingSpeedCategory'] =  $request->getShippingSpeedCategory();
        }
        if ($request->isSetDeliveryWindow()) {
            $DeliveryWindowCreateFulfillmentOrderRequest = $request->getDeliveryWindow();
            foreach  ($DeliveryWindowCreateFulfillmentOrderRequest->getStartDateTime() as $StartDateTimeDeliveryWindowIndex => $StartDateTimeDeliveryWindow) {
                $parameters['DeliveryWindow' . '.' . 'StartDateTime' . '.'  . ($StartDateTimeDeliveryWindowIndex + 1)] =  $StartDateTimeDeliveryWindow;
            }
        }
        if ($request->isSetDestinationAddress()) {
            $DestinationAddressCreateFulfillmentOrderRequest = $request->getDestinationAddress();
            foreach  ($DestinationAddressCreateFulfillmentOrderRequest->getName() as $NameDestinationAddressIndex => $NameDestinationAddress) {
                $parameters['DestinationAddress' . '.' . 'Name' . '.'  . ($NameDestinationAddressIndex + 1)] =  $NameDestinationAddress;
            }
        }
        if ($request->isSetFulfillmentAction()) {
            $parameters['FulfillmentAction'] =  $request->getFulfillmentAction();
        }
        if ($request->isSetFulfillmentPolicy()) {
            $parameters['FulfillmentPolicy'] =  $request->getFulfillmentPolicy();
        }
        if ($request->isSetFulfillmentMethod()) {
            $parameters['FulfillmentMethod'] =  $request->getFulfillmentMethod();
        }
        if ($request->isSetCODSettings()) {
            $CODSettingsCreateFulfillmentOrderRequest = $request->getCODSettings();
            foreach  ($CODSettingsCreateFulfillmentOrderRequest->getIsCODRequired() as $IsCODRequiredCODSettingsIndex => $IsCODRequiredCODSettings) {
                $parameters['CODSettings' . '.' . 'IsCODRequired' . '.'  . ($IsCODRequiredCODSettingsIndex + 1)] =  $IsCODRequiredCODSettings;
            }
        }
        if ($request->isSetShipFromCountryCode()) {
            $parameters['ShipFromCountryCode'] =  $request->getShipFromCountryCode();
        }
        if ($request->isSetNotificationEmailList()) {
            $NotificationEmailListCreateFulfillmentOrderRequest = $request->getNotificationEmailList();
            foreach  ($NotificationEmailListCreateFulfillmentOrderRequest->getmember() as $memberNotificationEmailListIndex => $memberNotificationEmailList) {
                $parameters['NotificationEmailList' . '.' . 'member' . '.'  . ($memberNotificationEmailListIndex + 1)] =  $memberNotificationEmailList;
            }
        }
        if ($request->isSetItems()) {
            $ItemsCreateFulfillmentOrderRequest = $request->getItems();
            foreach  ($ItemsCreateFulfillmentOrderRequest->getmember() as $memberItemsIndex => $memberItems) {
                $parameters['Items' . '.' . 'member' . '.'  . ($memberItemsIndex + 1)] =  $memberItems;
            }
        }

        return $parameters;
    }

    /**
     * Get Fulfillment Order
     * Get detailed information about a FulfillmentOrder.  This includes the
     *   original fulfillment order request, the status of the order and its
     *   items in Amazon's fulfillment network, and the shipments that have been
     *   generated to fulfill the order.
     *
     * @param mixed $request array of parameters for GetFulfillmentOrder request or GetFulfillmentOrder object itself
     * @see GetFulfillmentOrderRequest
     * @return GetFulfillmentOrderResponse
     *
     * @throws Exception
     */
    public function getFulfillmentOrder($request)
    {
        if (!($request instanceof GetFulfillmentOrderRequest)) {
            $request = new GetFulfillmentOrderRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetFulfillmentOrder';
        $httpResponse = $this->_invoke($parameters);

        $response = GetFulfillmentOrderResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert GetFulfillmentOrderRequest to name value pairs
     */
    private function _convertGetFulfillmentOrder($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetFulfillmentOrder';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetSellerFulfillmentOrderId()) {
            $parameters['SellerFulfillmentOrderId'] =  $request->getSellerFulfillmentOrderId();
        }

        return $parameters;
    }

    /**
     * Get Fulfillment Preview
     * Get estimated shipping dates and fees for all
     *   available shipping speed given a set of seller SKUs and quantities
     *
     *   If "ShippingSpeedCategories" are inputed, only previews for those options will be returned.
     *
     *   If "ShippingSpeedCategories" are not inputed, then previews for all available options
     *   are returned.
     *
     *   The service will return the fulfillment estimates for a set of Seller
     *   SKUs and quantities.
     *
     * @param mixed $request array of parameters for GetFulfillmentPreview request or GetFulfillmentPreview object itself
     * @see GetFulfillmentPreviewRequest
     * @return GetFulfillmentPreviewResponse
     *
     * @throws Exception
     */
    public function getFulfillmentPreview($request)
    {
        if (!($request instanceof GetFulfillmentPreviewRequest)) {
            $request = new GetFulfillmentPreviewRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetFulfillmentPreview';
        $httpResponse = $this->_invoke($parameters);

        $response = GetFulfillmentPreviewResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert GetFulfillmentPreviewRequest to name value pairs
     */
    private function _convertGetFulfillmentPreview($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetFulfillmentPreview';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }
        if ($request->isSetAddress()) {
            $AddressGetFulfillmentPreviewRequest = $request->getAddress();
            foreach  ($AddressGetFulfillmentPreviewRequest->getName() as $NameAddressIndex => $NameAddress) {
                $parameters['Address' . '.' . 'Name' . '.'  . ($NameAddressIndex + 1)] =  $NameAddress;
            }
        }
        if ($request->isSetItems()) {
            $ItemsGetFulfillmentPreviewRequest = $request->getItems();
            foreach  ($ItemsGetFulfillmentPreviewRequest->getmember() as $memberItemsIndex => $memberItems) {
                $parameters['Items' . '.' . 'member' . '.'  . ($memberItemsIndex + 1)] =  $memberItems;
            }
        }
        if ($request->isSetShippingSpeedCategories()) {
            $ShippingSpeedCategoriesGetFulfillmentPreviewRequest = $request->getShippingSpeedCategories();
            foreach  ($ShippingSpeedCategoriesGetFulfillmentPreviewRequest->getmember() as $memberShippingSpeedCategoriesIndex => $memberShippingSpeedCategories) {
                $parameters['ShippingSpeedCategories' . '.' . 'member' . '.'  . ($memberShippingSpeedCategoriesIndex + 1)] =  $memberShippingSpeedCategories;
            }
        }
        if ($request->isSetIncludeCODFulfillmentPreview()) {
            $parameters['IncludeCODFulfillmentPreview'] =  $request->getIncludeCODFulfillmentPreview() ? "true" : "false";
        }
        if ($request->isSetIncludeDeliveryWindows()) {
            $parameters['IncludeDeliveryWindows'] =  $request->getIncludeDeliveryWindows() ? "true" : "false";
        }

        return $parameters;
    }

    /**
     * Get Package Tracking Details
     * Gets the tracking details for a shipment package.
     *
     * @param mixed $request array of parameters for GetPackageTrackingDetails request or GetPackageTrackingDetails object itself
     * @see GetPackageTrackingDetailsRequest
     * @return GetPackageTrackingDetailsResponse
     *
     * @throws Exception
     */
    public function getPackageTrackingDetails($request)
    {
        if (!($request instanceof GetPackageTrackingDetailsRequest)) {
            $request = new GetPackageTrackingDetailsRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetPackageTrackingDetails';
        $httpResponse = $this->_invoke($parameters);

        $response = GetPackageTrackingDetailsResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert GetPackageTrackingDetailsRequest to name value pairs
     */
    private function _convertGetPackageTrackingDetails($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetPackageTrackingDetails';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetPackageNumber()) {
            $parameters['PackageNumber'] =  $request->getPackageNumber();
        }

        return $parameters;
    }

    /**
     * Get Service Status
     * Request to poll the system for availability.
     *   Status is one of GREEN, RED representing:
     *   GREEN: The service section is operating normally.
     *   RED: The service section disruption.
     *
     * @param mixed $request array of parameters for GetServiceStatus request or GetServiceStatus object itself
     * @see GetServiceStatusRequest
     * @return GetServiceStatusResponse
     *
     * @throws Exception
     */
    public function getServiceStatus($request)
    {
        if (!($request instanceof GetServiceStatusRequest)) {
            $request = new GetServiceStatusRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetServiceStatus';
        $httpResponse = $this->_invoke($parameters);

        $response = GetServiceStatusResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert GetServiceStatusRequest to name value pairs
     */
    private function _convertGetServiceStatus($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetServiceStatus';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }

        return $parameters;
    }

    /**
     * List All Fulfillment Orders
     * Gets the first set of fulfillment orders that are currently being
     *   fulfilled or that were being fulfilled at some time in the past
     *   (as specified by the query parameters). Also returns a NextToken
     *   which can be used iterate through the remaining fulfillment orders
     *   (via the ListAllFulfillmentOrdersByNextToken operation).
     *
     *   If a NextToken is not returned, it indicates the end-of-data.
     *
     *   If the QueryStartDateTime is set, the results will include all orders
     *   currently being fulfilled, and all orders that were being fulfilled
     *   since that date and time.
     *
     * @param mixed $request array of parameters for ListAllFulfillmentOrders request or ListAllFulfillmentOrders object itself
     * @see ListAllFulfillmentOrdersRequest
     * @return ListAllFulfillmentOrdersResponse
     *
     * @throws Exception
     */
    public function listAllFulfillmentOrders($request)
    {
        if (!($request instanceof ListAllFulfillmentOrdersRequest)) {
            $request = new ListAllFulfillmentOrdersRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListAllFulfillmentOrders';
        $httpResponse = $this->_invoke($parameters);

        $response = ListAllFulfillmentOrdersResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert ListAllFulfillmentOrdersRequest to name value pairs
     */
    private function _convertListAllFulfillmentOrders($request)
    {
        $parameters = array();
        $parameters['Action'] = 'ListAllFulfillmentOrders';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetQueryStartDateTime()) {
            $parameters['QueryStartDateTime'] =  $request->getQueryStartDateTime();
        }
        if ($request->isSetFulfillmentMethod()) {
            $FulfillmentMethodListAllFulfillmentOrdersRequest = $request->getFulfillmentMethod();
            foreach  ($FulfillmentMethodListAllFulfillmentOrdersRequest->getmember() as $memberFulfillmentMethodIndex => $memberFulfillmentMethod) {
                $parameters['FulfillmentMethod' . '.' . 'member' . '.'  . ($memberFulfillmentMethodIndex + 1)] =  $memberFulfillmentMethod;
            }
        }

        return $parameters;
    }

    /**
     * List All Fulfillment Orders By Next Token
     * Gets the next set of fulfillment orders that are currently being
     *   being fulfilled or that were being fulfilled at some time in the
     *   past.
     *
     *   If a NextToken is not returned, it indicates the end-of-data.
     *
     * @param mixed $request array of parameters for ListAllFulfillmentOrdersByNextToken request or ListAllFulfillmentOrdersByNextToken object itself
     * @see ListAllFulfillmentOrdersByNextTokenRequest
     * @return ListAllFulfillmentOrdersByNextTokenResponse
     *
     * @throws Exception
     */
    public function listAllFulfillmentOrdersByNextToken($request)
    {
        if (!($request instanceof ListAllFulfillmentOrdersByNextTokenRequest)) {
            $request = new ListAllFulfillmentOrdersByNextTokenRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListAllFulfillmentOrdersByNextToken';
        $httpResponse = $this->_invoke($parameters);

        $response = ListAllFulfillmentOrdersByNextTokenResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert ListAllFulfillmentOrdersByNextTokenRequest to name value pairs
     */
    private function _convertListAllFulfillmentOrdersByNextToken($request)
    {
        $parameters = array();
        $parameters['Action'] = 'ListAllFulfillmentOrdersByNextToken';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetNextToken()) {
            $parameters['NextToken'] =  $request->getNextToken();
        }

        return $parameters;
    }

    /**
     * Update Fulfillment Order
     * The SellerFulfillmentOrderId must be the order ID of the original
     *     order that needs to be updated.
     *
     *   This DisplayableOrderDateTime will appear as the "order date" in
     *   recipient-facing materials such as the packing slip.  The format
     *   must be timestamp.
     *
     *   The DisplayableOrderId will appear as the "order id" in those
     *   materials, and the DisplayableOrderComment will appear as well.
     *
     *   ShippingSpeedCategory is the Service Level Agreement for how long it
     *   will take a shipment to be transported from the fulfillment center
     *   to the recipient, once shipped. no default.
     *   The following shipping speeds are available for US domestic:
     *    * Standard, 3-5 business days
     *    * Expedited, 2 business days
     *    * Priority, 1 business day
     *
     *   Shipping speeds may vary elsewhere.  Please consult your manual for published SLAs.
     *
     *
     *   DestinationAddress is the address the items will be shipped to.
     *
     *   FulfillmentAction indicates whether an order will be held or shipped.
     *   Default is Hold.
     *   * Hold if the order needs to be held but does not need to be shipped.
     *   * Ship if the order is to be fulfilled and shipped out to the customer
     *   immediately.
     *
     *   FulfillmentPolicy indicates how unfulfillable items should be
     *   handled. default is FillOrKill.
     *    * FillOrKill if any item is determined to be unfulfillable
     *      before any items have started shipping, the entire order is
     *      considered unfulfillable.  Once any part of the order has
     *      started shipping, as much of the order as possible will be
     *      shipped.
     *    * FillAll never consider any item unfulfillable.  Items must
     *      either be fulfilled or merchant-cancelled.
     *    * FillAllAvailable fulfill as much of the order as possible.
     *
     *   NotificationEmailList can be used to provide a list of e-mail
     *   addresses to receive ship-complete e-mail notifications. These
     *   e-mails are customer-facing e-mails sent by FBA on behalf of
     *   the seller.
     *
     * @param mixed $request array of parameters for UpdateFulfillmentOrder request or UpdateFulfillmentOrder object itself
     * @see UpdateFulfillmentOrderRequest
     * @return UpdateFulfillmentOrderResponse
     *
     * @throws Exception
     */
    public function updateFulfillmentOrder($request)
    {
        if (!($request instanceof UpdateFulfillmentOrderRequest)) {
            $request = new UpdateFulfillmentOrderRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'UpdateFulfillmentOrder';
        $httpResponse = $this->_invoke($parameters);

        $response = UpdateFulfillmentOrderResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert UpdateFulfillmentOrderRequest to name value pairs
     */
    private function _convertUpdateFulfillmentOrder($request)
    {
        $parameters = array();
        $parameters['Action'] = 'UpdateFulfillmentOrder';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }
        if ($request->isSetSellerFulfillmentOrderId()) {
            $parameters['SellerFulfillmentOrderId'] =  $request->getSellerFulfillmentOrderId();
        }
        if ($request->isSetDisplayableOrderId()) {
            $parameters['DisplayableOrderId'] =  $request->getDisplayableOrderId();
        }
        if ($request->isSetDisplayableOrderDateTime()) {
            $parameters['DisplayableOrderDateTime'] =  $request->getDisplayableOrderDateTime();
        }
        if ($request->isSetDisplayableOrderComment()) {
            $parameters['DisplayableOrderComment'] =  $request->getDisplayableOrderComment();
        }
        if ($request->isSetShippingSpeedCategory()) {
            $parameters['ShippingSpeedCategory'] =  $request->getShippingSpeedCategory();
        }
        if ($request->isSetDestinationAddress()) {
            $DestinationAddressUpdateFulfillmentOrderRequest = $request->getDestinationAddress();
            foreach  ($DestinationAddressUpdateFulfillmentOrderRequest->getName() as $NameDestinationAddressIndex => $NameDestinationAddress) {
                $parameters['DestinationAddress' . '.' . 'Name' . '.'  . ($NameDestinationAddressIndex + 1)] =  $NameDestinationAddress;
            }
        }
        if ($request->isSetFulfillmentAction()) {
            $parameters['FulfillmentAction'] =  $request->getFulfillmentAction();
        }
        if ($request->isSetFulfillmentPolicy()) {
            $parameters['FulfillmentPolicy'] =  $request->getFulfillmentPolicy();
        }
        if ($request->isSetFulfillmentMethod()) {
            $parameters['FulfillmentMethod'] =  $request->getFulfillmentMethod();
        }
        if ($request->isSetShipFromCountryCode()) {
            $parameters['ShipFromCountryCode'] =  $request->getShipFromCountryCode();
        }
        if ($request->isSetNotificationEmailList()) {
            $NotificationEmailListUpdateFulfillmentOrderRequest = $request->getNotificationEmailList();
            foreach  ($NotificationEmailListUpdateFulfillmentOrderRequest->getmember() as $memberNotificationEmailListIndex => $memberNotificationEmailList) {
                $parameters['NotificationEmailList' . '.' . 'member' . '.'  . ($memberNotificationEmailListIndex + 1)] =  $memberNotificationEmailList;
            }
        }
        if ($request->isSetItems()) {
            $ItemsUpdateFulfillmentOrderRequest = $request->getItems();
            foreach  ($ItemsUpdateFulfillmentOrderRequest->getmember() as $memberItemsIndex => $memberItems) {
                $parameters['Items' . '.' . 'member' . '.'  . ($memberItemsIndex + 1)] =  $memberItems;
            }
        }

        return $parameters;
    }

    // Private API ------------------------------------------------------------//

}
