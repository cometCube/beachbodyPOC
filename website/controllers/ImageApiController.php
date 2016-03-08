<?php

use Website\Controller\Action;

class ImageApiController extends Action {

	/*
	@Params: 
		id : Asset ID
		Thumbnail: Thumbnail to be applied
		Apikey: API Key to Aunticate for REST
	@Returns:
		URL: URL for Image according to applied thumnail if any
	*/
	public function imageAction () {
		//$this->enableLayout();
		$id = $this->getParam('id');
		$thumbnail = $this->getParam('thumbnail');
		$apikey = $this->getParam('apikey');
		//die($id.'-'.$thumbnail.'-'.$apikey);
		$apiCallUrl = 'http://'.$_SERVER['HTTP_HOST'].'/webservice/rest/asset/id/'.$id.'?apikey='.$apikey.'&thumbnail='.$thumbnail;

		//  Initiate curl
		$ch = curl_init();
		// Disable SSL verification
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		// Will return the response, if false it print the response
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		// Set the url
		curl_setopt($ch, CURLOPT_URL, $apiCallUrl);
		// Execute
		$result=curl_exec($ch);
		// Closing
		curl_close($ch);

		$imageData = json_decode($result, true);
		$this->view->imageURL = $imageData['data']['thumbnail'];
	}


	/*
     * Check the API-key
     *
     * @param $apiKey (string)
     * @return true|throws Exception
     */
    private function checkApiKey($apiKey = '')
    {
        $return = FALSE;
        if (HOWEVER_YOUR_APIKEY_IS_BUILT) {
            $return = true;
        }
        if ($return === FALSE) {
            throw new Zend_Http_Header_Exception_InvalidArgumentException('Wrong API-key.', 403);
        }
        
        return $return;
    }
}

