<?php
namespace MPAPI\Services;

/**
 * Labels service
 *
 * @author Martin Hrdlicka <martin.hrdlicka@mall.cz>
 */
class Labels extends AbstractService
{

	/**
	 *
	 * @var Client
	 */
	private $client;

	/**
	 *
	 * @var string
	 */
	const PATH = 'labels';

	/**
	 * Labels constructor.
	 * 
	 * @param Client $client
	 */
	public function __construct(Client $client)
	{
		$this->client = $client;
	}

	/**
	 * Get Data
	 *
	 * @return array
	 */
	public function get()
	{
		$response = $this->client->sendRequest(self::PATH, 'GET');
		$responseBody = json_decode($response->getBody(), true);
		return $responseBody['data'];
	}
}
