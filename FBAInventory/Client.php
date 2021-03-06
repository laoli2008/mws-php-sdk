<?php

namespace Amazon\MWS\FBAInventory;

use Amazon\MWS\Client as BaseClient;

use Amazon\MWS\FBAInventory\Exception as FBAInventoryException;
use Amazon\MWS\FBAInventory\Model\GetServiceStatusRequest;
use Amazon\MWS\FBAInventory\Model\GetServiceStatusResponse;
use Amazon\MWS\FBAInventory\Model\ListInventorySupplyByNextTokenRequest;
use Amazon\MWS\FBAInventory\Model\ListInventorySupplyByNextTokenResponse;
use Amazon\MWS\FBAInventory\Model\ListInventorySupplyRequest;
use Amazon\MWS\FBAInventory\Model\ListInventorySupplyResponse;
use Amazon\MWS\FBAInventory\Model\ResponseHeaderMetadata;

/**
 * Client is an implementation of FBAInventoryInterface
 */
class Client extends BaseClient implements FBAInventoryInterface
{
    const SERVICE_VERSION    = '2010-10-01';
    const MWS_CLIENT_VERSION = '2014-09-30';

    /**
     * Get Service Status
     * Gets the status of the service.
     *     Status is one of GREEN, RED representing:
     *     GREEN: The service section is operating normally.
     *     RED: The service section disruption.
     *
     * @param mixed $request array of parameters for GetServiceStatus request or GetServiceStatus object itself
     * @see GetServiceStatusRequest
     * @return GetServiceStatusResponse
     *
     * @throws FBAInventoryException
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
     * List Inventory Supply
     * Get information about the supply of seller-owned inventory in
     *     Amazon's fulfillment network. "Supply" is inventory that is available
     *     for fulfilling (a.k.a. Multi-Channel Fulfillment) orders. In general
     *     this includes all sellable inventory that has been received by Amazon,
     *     that is not reserved for existing orders or for internal FC processes,
     *     and also inventory expected to be received from inbound shipments.
     *
     *     This operation provides 2 typical usages by setting different
     *     ListInventorySupplyRequest value:
     *
     *     1. Set value to SellerSkus and not set value to QueryStartDateTime,
     *     this operation will return all sellable inventory that has been received
     *     by Amazon's fulfillment network for these SellerSkus.
     *
     *     2. Not set value to SellerSkus and set value to QueryStartDateTime,
     *     This operation will return information about the supply of all seller-owned
     *     inventory in Amazon's fulfillment network, for inventory items that may have had
     *     recent changes in inventory levels. It provides the most efficient mechanism
     *     for clients to maintain local copies of inventory supply data.
     *
     *     Only 1 of these 2 parameters (SellerSkus and QueryStartDateTime) can be set value for 1 request.
     *     If both with values or neither with values, an exception will be thrown.
     *
     *     This operation is used with ListInventorySupplyByNextToken
     *     to paginate over the resultset. Begin pagination by invoking the
     *     ListInventorySupply operation, and retrieve the first set of
     *     results. If more results are available,continuing iteratively requesting further
     *     pages results by invoking the ListInventorySupplyByNextToken operation (each time
     *     passing in the NextToken value from the previous result), until the returned NextToken
     *     is null, indicating no further results are available.
     *
     * @param mixed $request array of parameters for ListInventorySupply request or ListInventorySupply object itself
     * @see ListInventorySupplyRequest
     * @return ListInventorySupplyResponse
     *
     * @throws FBAInventoryException
     */
    public function listInventorySupply($request)
    {
        if (!($request instanceof ListInventorySupplyRequest)) {
            $request = new ListInventorySupplyRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListInventorySupply';
        $httpResponse = $this->_invoke($parameters);

        $response = ListInventorySupplyResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert ListInventorySupplyRequest to name value pairs
     */
    private function _convertListInventorySupply($request)
    {
        $parameters = array();
        $parameters['Action'] = 'ListInventorySupply';
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
        if ($request->isSetSellerSkus()) {
            $SellerSkusListInventorySupplyRequest = $request->getSellerSkus();
            foreach  ($SellerSkusListInventorySupplyRequest->getmember() as $memberSellerSkusIndex => $memberSellerSkus) {
                $parameters['SellerSkus' . '.' . 'member' . '.'  . ($memberSellerSkusIndex + 1)] =  $memberSellerSkus;
            }
        }
        if ($request->isSetQueryStartDateTime()) {
            $parameters['QueryStartDateTime'] =  $request->getQueryStartDateTime();
        }
        if ($request->isSetResponseGroup()) {
            $parameters['ResponseGroup'] =  $request->getResponseGroup();
        }

        return $parameters;
    }

    /**
     * List Inventory Supply By Next Token
     * Continues pagination over a resultset of inventory data for inventory
     *     items.
     *
     *     This operation is used in conjunction with ListUpdatedInventorySupply.
     *     Please refer to documentation for that operation for further details.
     *
     * @param mixed $request array of parameters for ListInventorySupplyByNextToken request or ListInventorySupplyByNextToken object itself
     * @see ListInventorySupplyByNextTokenRequest
     * @return ListInventorySupplyByNextTokenResponse
     *
     * @throws FBAInventoryException
     */
    public function listInventorySupplyByNextToken($request)
    {
        if (!($request instanceof ListInventorySupplyByNextTokenRequest)) {
            $request = new ListInventorySupplyByNextTokenRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListInventorySupplyByNextToken';
        $httpResponse = $this->_invoke($parameters);

        $response = ListInventorySupplyByNextTokenResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert ListInventorySupplyByNextTokenRequest to name value pairs
     */
    private function _convertListInventorySupplyByNextToken($request)
    {
        $parameters = array();
        $parameters['Action'] = 'ListInventorySupplyByNextToken';
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

    // Private API ------------------------------------------------------------//

}
