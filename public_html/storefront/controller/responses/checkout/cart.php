<?php 
/*------------------------------------------------------------------------------
  $Id$

  AbanteCart, Ideal OpenSource Ecommerce Solution
  http://www.AbanteCart.com

  Copyright © 2011-2013 Belavier Commerce LLC

  This source file is subject to Open Software License (OSL 3.0)
  License details is bundled with this package in the file LICENSE.txt.
  It is also available at this URL:
  <http://www.opensource.org/licenses/OSL-3.0>

 UPGRADE NOTE:
   Do not edit or add to this file if you wish to upgrade AbanteCart to newer
   versions in the future. If you wish to customize AbanteCart for your
   needs please refer to http://www.AbanteCart.com for more information.
------------------------------------------------------------------------------*/
if (! defined ( 'DIR_CORE' )) {
	header ( 'Location: static_pages/' );
}
class ControllerResponsesCheckoutCart extends AController {

	public function main() {

        //init controller data
        $this->extensions->hk_InitData($this,__FUNCTION__);

		if ($this->request->server['REQUEST_METHOD'] == 'POST') {
		
      		if (isset($this->request->post['quantity'])) {
				if (!is_array($this->request->post['quantity'])) {
					if (isset($this->request->post['option'])) {
						$option = $this->request->post['option'];
					} else {
						$option = array();	
					}
			
      				$this->cart->add($this->request->post['product_id'], $this->request->post['quantity'], $option);
				} else {
					foreach ($this->request->post['quantity'] as $key => $value) {
	      				$this->cart->update($key, $value);
					}
				}
				
				unset($this->session->data['shipping_methods']);
				unset($this->session->data['shipping_method']);
				unset($this->session->data['payment_methods']);
				unset($this->session->data['payment_method']);
      		}

      		if (isset($this->request->post['remove'])) {
                foreach (array_keys($this->request->post['remove']) as $key) {
          			$this->cart->remove($key);
				}
      		}
			
			if (isset($this->request->post['redirect'])) {
				$this->session->data['redirect'] = $this->request->post['redirect'];
			}	
			
			if (isset($this->request->post['quantity']) || isset($this->request->post['remove'])) {
				unset($this->session->data['shipping_methods']);
				unset($this->session->data['shipping_method']);
				unset($this->session->data['payment_methods']);
				unset($this->session->data['payment_method']);
			}
    	}

        //init controller data
        $this->extensions->hk_UpdateData($this,__FUNCTION__);

  	}

	public function shipping_methods() {
        //init controller data
        $this->extensions->hk_InitData($this,__FUNCTION__);
		$output = array();
		$this->load->library('json');
		if ($this->request->server['REQUEST_METHOD'] != 'POST') {
			$this->response->setOutput(AJson::encode($output));	
			return '';
		}
		if( $this->cart->hasShipping() ){
			$this->loadModel('localisation/country');
			$this->loadModel('localisation/zone');
			$country_info = $this->model_localisation_country->getCountry($this->request->post[ 'country_id' ]);
			$zone_info = $this->model_localisation_zone->getZone($this->request->post[ 'zone_id' ]);
			$shipping_address = array(
					'postcode'       => $this->request->post['postcode'],
					'country_id'     => $this->request->post['country_id'],
					'country_iso_code2' => $country_info['iso_code_2'],
					'iso_code_2' => $country_info['iso_code_2'],
					'zone_id'        => $this->request->post['zone_id'],
					'zone_code'        => $zone_info['code']
			);


			$this->tax->setZone($shipping_address[ 'country_id' ], $shipping_address[ 'zone_id' ]);

			$this->loadModel('checkout/extension');

			$results = $this->model_checkout_extension->getExtensions('shipping');
			foreach ($results as $result) {
				$this->loadModel('extension/' . $result[ 'key' ]);

				/** @noinspection PhpUndefinedMethodInspection */
				$quote = $this->{'model_extension_' . $result[ 'key' ]}->getQuote($shipping_address);

				if ($quote) {
					$output[ $result[ 'key' ] ] = array(
						'title' => $quote[ 'title' ],
						'quote' => $quote[ 'quote' ],
						'sort_order' => $quote[ 'sort_order' ],
						'error' => $quote[ 'error' ]
					);
				}
			}

			$sort_order = array();
			foreach ($output as $key => $value) {
				$sort_order[ $key ] = $value[ 'sort_order' ];
			}
			array_multisort($sort_order, SORT_ASC, $output);
			$this->session->data[ 'shipping_methods' ] = $output;

			//add ready selectbox element
			if ( count($output)) {
				$disp_ship = array();
				foreach ($output as $shp_data ) {
					$shp_data['quote'] = (array)$shp_data['quote'];
					foreach ( $shp_data['quote'] as $qt_data) {
						$disp_ship[$qt_data['id']] =  $qt_data['title'] . " - " . $qt_data['text'];
					}
				}

				if($disp_ship){
					$selectbox = HtmlElementFactory::create(array(
																 'type' => 'selectbox',
																 'name' => 'shippings',
																 'options' => $disp_ship,
																'style' => 'large-field'
															));
					$output['selectbox'] = $selectbox->getHTML();
				}else{
					$output['selectbox'] = '';
				}
			}

		}else{
			$output['selectbox'] = '';
		}
  	
  			//init controller data
        $this->extensions->hk_UpdateData($this,__FUNCTION__);


		$this->response->setOutput(AJson::encode($output));		
	}

	public function recalc_totals() {
        //init controller data
        $this->extensions->hk_InitData($this,__FUNCTION__);
		$output = array();

		$this->load->library('json');

		if ($this->request->server['REQUEST_METHOD'] != 'POST') {
			$this->response->setOutput(AJson::encode($output));	
			return '';
		}
		
 		if ($this->request->post['country_id'] && $this->request->post['zone_id']) {
			$this->tax->setZone($this->request->post['country_id'], $this->request->post['zone_id']);
		}
		
		if ( $this->request->post[ 'shipping_method' ] ) {
			$shipping = explode('.', $this->request->post[ 'shipping_method' ]);
			$this->session->data[ 'shipping_method' ] = $this->session->data[ 'shipping_methods' ][ $shipping[ 0 ] ][ 'quote' ][ $shipping[ 1 ] ];
		}

		$display_totals = $this->cart->buildTotalDisplay();      		
		$output['totals'] = $display_totals['total_data'];;
 	  	
  		//init controller data
        $this->extensions->hk_UpdateData($this,__FUNCTION__);


		$this->response->setOutput(AJson::encode($output));		
	}
	
}