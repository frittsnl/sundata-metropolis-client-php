# # MeterUpdatePayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**plant_id** | **int** | Updating the plant_id will move the meter to another plant. Only plants of the same company are allowed. | [optional] [readonly]
**amount_in_cents_per_kwh** | **float** |  | [optional]
**peak_in_watt** | **float** |  | [optional]
**p90_in_kwh** | **float** |  | [optional]
**orientation_in_degrees** | **float** |  | [optional]
**angle_in_degrees** | **float** |  | [optional]
**has_mixed_panel_orientations** | **bool** |  | [optional]
**retired_on** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
