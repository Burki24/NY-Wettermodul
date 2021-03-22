<?php

declare(strict_types=1);
	class NY_Wetter extends IPSModule
	{
		public function Create()
		{
			//Never delete this line!
			parent::Create();

			$this->RequireParent('{4CB91589-CE01-4700-906F-26320EFCF6C4}');


			$this->RegisterPropertyString('Longitude', ' ');
			$this->RegisterPropertyString('Latitude', ' ');
			$this->RegisterPropertyString('Name', ' ');
		}

		public function Destroy()
		{
			//Never delete this line!
			parent::Destroy();
		}

		public function ApplyChanges()
		{
			//Never delete this line!
			parent::ApplyChanges();

			$lot = $this->ReadPropertyString('Longitude');
			$lat = $this->ReadPropertyString('Latitude');
			$nam = $this->ReadPropertyString('Name');
		
					}

		public function Send(string $RequestMethod, string $RequestURL, string $RequestData, int $Timeout)
		{

			$this->SendDebug('SetReceiveDataFilter - lot', $Lot, 0);
			$this->SendDebug('SetReceiveDataFilter - lat', $lat, 0);
			$this->SendDebug('SetReceiveDataFilter - nam', $nam, 0);


		//	$this->SendDataToParent(json_encode(['DataID' => '{D4C1D08F-CD3B-494B-BE18-B36EF73B8F43}', "RequestMethod" => $RequestMethod, "RequestURL" => $RequestURL, "RequestData" => $RequestData, "Timeout" => $Timeout]));
		}

		public function ReceiveData($JSONString)
		{

			$this->SetReceiveDataFilter('.*' . $lot . '.*');
			$this->SetReceiveDataFilter('.*' . $lat . '.*');
			$this->SetReceiveDataFilter('.*' . $nam . '.*');

		//	$data = json_decode($JSONString);
		//	IPS_LogMessage('Device RECV', utf8_decode($data->Buffer . ' - ' . $data->RequestMethod . ' - ' . $data->RequestURL . ' - ' . $data->RequestData . ' - ' . $data->Timeout));
		}
	}