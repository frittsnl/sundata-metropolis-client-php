# # ActiveMeter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**plant_id** | **int** |  |
**inbound_driver_id** | **int** |  |
**reference_identifier** | **string** |  |
**amount_in_cents_per_kwh** | **float** |  | [optional]
**peak_in_watt** | **float** |  | [optional]
**p90_in_kwh** | **float** |  | [optional]
**orientation_in_degrees** | **float** |  | [optional]
**angle_in_degrees** | **float** |  | [optional]
**has_mixed_panel_orientations** | **bool** |  | [optional]
**status** | **string** |  | [optional]
**updated_at** | **\DateTime** |  |
**created_at** | **\DateTime** |  |
**retired_on** | **\DateTime** |  | [optional]
**operational_since** | **\DateTime** |  | [optional]
**latitude** | **float** |  | [optional]
**longitude** | **float** |  | [optional]
**weather_station_id** | **int** |  | [optional]
**inbound_driver** | [**\SunDataMetropolisClient\Model\InboundDriver**](InboundDriver.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
