@php 
    $sessiondata=session()->all();

@endphp
<html>
<table>
    <!-- Headings -->
    <tr>
        <td colspan="3" width="20" ><h1>Tarak Mehta</h1></td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td colspan="3">3, Yagna Krupa,</td>
        <td></td>
    </tr>
    <tr>
        <td colspan="3">F.I.I.I.S.L.F.I.I.V</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td colspan="3">Takhteshwar Plot No. 42/C,</td>
        <td></td>
    </tr>
    <tr>
        <td colspan="3">Surveyor/Loss Assessor/Approved Valuer</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td colspan="3">Bhavnagar – 364 001 (Gujarat)</td>
        <td></td>
    </tr>
    <tr>
        <td colspan="3">Lic No:6246, Exp. Dt. 06/09/2020</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td colspan="3">Phone / Fax  : 0278 2515630.</td>
        <td></td>
    </tr>
    <tr>
        <td colspan="3">IIISLA  Membership no. F/W/00219</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td colspan="4">E-mail : tarak.mehta@yahoo.co.in</td>
        
    </tr>
    
    <tr>
        <td colspan="3">IIV Membership no.   LM F-1561   Cat:XII   </td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="3">CE & A  Membership no. LM-CAT XII-M-0103</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td style="background-color: #000;" colspan="3"></td>
        <td style="background-color: #000;" colspan="3"></td>
        <td style="background-color: #000;" colspan="3"></td>
        <td style="background-color: #000;" colspan="3"></td>
        <td style="background-color: #000;"></td>
    </tr>
    <tr>
        <td colspan="3"></td>
        <td colspan="3">Ref No:-</td>
        <td colspan="3">{{ $reportdata['reference_no'] }}</td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="3"></td>
        <td colspan="3">Date :</td>
        <td colspan="3">{{ $reportdata['report_date'] }}</td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1"></td>
        <td colspan="5"></td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1"><b>To : </b></td>
        <td colspan="5">{{ $reportdata['report_to'] }}</td>
        <td colspan="3">{{ $reportdata['report_date'] }}</td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1"></td>
        <td colspan="5"></td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="4"></td>
        <td style="color: #c48ee8;" colspan="3"><h3>INSPECTION DETAILS</h3></td>
        <td colspan="2"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1"></td>
        <td colspan="5"></td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="2"><b>Inspection Date :</b></td>
        <td colspan="5">{{ $reportdata['inspection_date'] }}</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="2"><b>Inspected at :</b></td>
        <td colspan="5">{{ $reportdata['inspected_at'] }}</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="2"><b>Inspected at stockyard or garage :</b></td>
        <td colspan="5">{{ $reportdata['inspected_at_stockyard'] }}</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="2"><b>Inspection Time : </b></td>
        <td colspan="5">{{ $reportdata['inspection_time'] }}</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1"></td>
        <td colspan="5"></td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="4"></td>
        <td style="color: #c48ee8;" colspan="3"><h3>REGISTRATION DETAILS</h3></td>
        <td colspan="2"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1"></td>
        <td colspan="5"></td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="3"><b>Registration Number : </b></td>
        <td colspan="3">{{ $reportdata['registration_no'] }}</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="3"><b>Registered owner name & Address : </b></td>
        <td colspan="3">{{ $reportdata['registred_owner_name_add'] }}</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="3"><b>Proposed owner name & address : </b></td>
        <td colspan="3">{{ $reportdata['proposed_owner_name_add'] }}</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="3"><b>Engine Number : </b></td>
        <td colspan="3">{{ $reportdata['engine_no'] }}</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="3"><b>Chassis Number : </b></td>
        <td colspan="3">{{ $reportdata['chassis_no'] }}</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="3"><b>Color : </b></td>
        <td colspan="3">{{ $reportdata['color'] }}</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="3"><b>Odo meter reading ( kms ) : </b></td>
        <td colspan="3">{{ $reportdata['odo_meter_reading'] }}</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="3"><b>Hours Reading, if applicable  : </b></td>
        <td colspan="3">{{ $reportdata['hours_reading'] }}</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="3"><b>Owner Serial Number  : </b></td>
        <td colspan="3">{{ $reportdata['owner_serial_number'] }}</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="3"><b>Hypothecation details (if any) : </b></td>
        <td colspan="3">{{ $reportdata['hypothecation_details'] }}</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="3"><b>Class of Vehicle & Type of body : </b></td>
        <td colspan="3">{{ $reportdata['class_of_vehical'] }}</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="3"><b>Manufacturer : </b></td>
        <td colspan="3">{{ $reportdata['nanufacture'] }}</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="3"><b>Model : </b></td>
        <td colspan="3">{{ $reportdata['model'] }}</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="3"><b>Type of Fuel : </b></td>
        <td colspan="3">{{ $reportdata['fuel'] }}</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="3"><b>Month & year of Manufacturing : </b></td>
        <td colspan="3">{{ $reportdata['month_year_manufactureing'] }}</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="3"><b>Date of Registration : </b></td>
        <td colspan="3">{{ $reportdata['date_of_registration'] }}</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="9"><b>(in case of re-registration please write the date of registration and the fact that it's re-registered) </b></td>
        <td colspan="1">{{ $reportdata['re_registration_no'] }}</td>
        <td colspan="1"></td>
        <td colspan="1"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="9"><b>(in case of reassigned number please write the old number also ) </b></td>
        <td colspan="1">{{ $reportdata['reassigned_no'] }}</td>
        <td colspan="1"></td>
        <td colspan="1"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="3"><b>Tax paid upto : </b></td>
        <td colspan="3">{{ $reportdata['tax_paid_upto'] }}</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="3"><b>In case of commercial Vehicles,Fitness valid upto : </b></td>
        <td colspan="3">{{ $reportdata['vehicle_fitness'] }}</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="3"><b>In case of commercial Vehicles, Permit valid upto : </b></td>
        <td colspan="3">{{ $reportdata['vehicle_permit'] }}</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="3"><b>Duplicate RC or original RC : </b></td>
        <td colspan="3">{{ $reportdata['rc'] }}</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="3"><b>Is the vehicle running condition or standing condition : </b></td>
        <td colspan="3">{{ $reportdata['condition'] }}</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="3"><b>Is it re-registered vehicle : </b></td>
        <td colspan="3">{{ $reportdata['reregistered'] }}</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="3"><b>Is this a seized vehicle of financier  : </b></td>
        <td colspan="3">{{ $reportdata['seized'] }}</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1"></td>
        <td colspan="5"></td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="4"></td>
        <td style="color: #c48ee8;" colspan="3"><h3>CONDITION</h3></td>
        <td colspan="2"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1"></td>
        <td colspan="5"></td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1"><b>Engine</b></td>
        <td colspan="5">{{ $reportdata['con_engine'] }}</td>
        <td colspan="3"><b>Lights and electrical</b></td>
        <td colspan="3">{{ $reportdata['con_light_electrical'] }}</td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1"><b>Cabin</b></td>
        <td colspan="5">{{ $reportdata['con_cabin'] }}</td>
        <td colspan="3"><b>Chassis</b></td>
        <td colspan="3">{{ $reportdata['con_chassis'] }}</td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1"><b>Battery</b></td>
        <td colspan="5">{{ $reportdata['con_battery'] }}</td>
        <td colspan="3"><b>Body Condition</b></td>
        <td colspan="3">{{ $reportdata['con_body_condition'] }}</td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1"><b>Tyre Details </b></td>
        <td colspan="5">{{ $reportdata['con_tyre_details'] }}</td>
        <td colspan="3"><b>Paint(Internal/External)</b></td>
        <td colspan="3">{{ $reportdata['con_paint'] }}</td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1"><b>Front</b></td>
        <td colspan="5">{{ $reportdata['con_front'] }}</td>
        <td colspan="3"><b>Suspension</b></td>
        <td colspan="3">{{ $reportdata['con_suspension'] }}</td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1"><b>Centre</b></td>
        <td colspan="5">{{ $reportdata['con_center'] }}</td>
        <td colspan="3"><b>Rear</b></td>
        <td colspan="3">{{ $reportdata['con_rear'] }}</td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1"></td>
        <td colspan="5"></td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1"><b>Tipper</b></td>
        <td colspan="5"></td>
        <td colspan="3"><b>Cabin /Body Shell</b></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1"><b>Fr. Bumper</b></td>
        <td colspan="5">{{ $reportdata['con_fr_bumper'] }}</td>
        <td colspan="3">Cabin Lhs Structure</td>
        <td colspan="3">{{ $reportdata['con_cabin_lhs'] }}</td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1"><b>Cowl/Show/FES</b></td>
        <td colspan="5"></td>
        <td colspan="3">Cabin Rhs Structure</td>
        <td colspan="3">{{ $reportdata['con_cabin_rhs'] }}</td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1">Cowl Assy/FES Assy </td>
        <td colspan="5">{{ $reportdata['con_cowl_assy'] }}</td>
        <td colspan="3">Cabin Top </td>
        <td colspan="3">{{ $reportdata['con_cabin_top'] }}</td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1">Cowl Panel Lh </td>
        <td colspan="5">{{ $reportdata['con_panel_lh'] }}</td>
        <td colspan="3">Exhaust System</td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1">Cowl Panel Lh </td>
        <td colspan="5">{{ $reportdata['con_panel_lh'] }}</td>
        <td colspan="3"><b>Exhaust System</b></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1">Cowl Panel Rh </td>
        <td colspan="5">{{ $reportdata['con_panel_rh'] }}</td>
        <td colspan="3">Silencer</td>
        <td colspan="3">{{ $reportdata['con_silencer'] }}</td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1">W/S Glasses</td>
        <td colspan="5">{{ $reportdata['con_ws_gkasses'] }}</td>
        <td colspan="3">Manifold</td>
        <td colspan="3">{{ $reportdata['con_manifold'] }}</td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1">Dash Board</td>
        <td colspan="5">{{ $reportdata['con_dashboeard'] }}</td>
        <td colspan="3"><b>Cooling System</b></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1">Bonnet/Center Grill</td>
        <td colspan="5">{{ $reportdata['con_bonnet_centere'] }}</td>
        <td colspan="3">Radiator/Inter Cooler</td>
        <td colspan="3">{{ $reportdata['con_radioter'] }}</td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1"><b>Chassis Frame</b></td>
        <td colspan="5"></td>
        <td colspan="3">Hoses</td>
        <td colspan="3">{{ $reportdata['con_hoses'] }}</td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1">Chassis Frame</td>
        <td colspan="5">{{ $reportdata['con_chassis_frame'] }}</td>
        <td colspan="3">Fuel Supply System</td>
        <td colspan="3">{{ $reportdata['con_fuel_supply'] }}</td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1"><b>Engine</b></td>
        <td colspan="5"></td>
        <td colspan="3">Fuel Tank</td>
        <td colspan="3">{{ $reportdata['con_fuel_tank'] }}</td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1">Engine Assy</td>
        <td colspan="5">{{ $reportdata['con_engine_assy'] }}</td>
        <td colspan="3">All Pipe Lines</td>
        <td colspan="3">{{ $reportdata['con_pipe_lines'] }}</td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1">FIP</td>
        <td colspan="5">{{ $reportdata['con_fip'] }}</td>
        <td colspan="3"><b>Electrical System</b></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1">Air Cleaner</td>
        <td colspan="5">{{ $reportdata['con_air_cleaner'] }}</td>
        <td colspan="3">Rhs Head Lamp</td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1"><b>Axle System</b></td>
        <td colspan="5"></td>
        <td colspan="3">Lhs Head Lamp</td>
        <td colspan="3">{{ $reportdata['con_lhs_head_lamp'] }}</td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1">Fr Axle</td>
        <td colspan="5">{{ $reportdata['con_fr_axle'] }}</td>
        <td colspan="3">Tail /Cluster Lamp</td>
        <td colspan="3">{{ $reportdata['con_tail_cluster'] }}</td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1">Rr Axle</td>
        <td colspan="5">{{ $reportdata['con_rr_axle'] }}</td>
        <td colspan="3">Battery Make</td>
        <td colspan="3">{{ $reportdata['con_battery_make'] }}</td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1"><b>Transmission System </b></td>
        <td colspan="5">{{ $reportdata['con_transmission'] }}</td>
        <td colspan="3">Battery Condition</td>
        <td colspan="3">{{ $reportdata['con_battery_condition'] }}</td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1">Gear Box</td>
        <td colspan="5">{{ $reportdata['con_gear_box'] }}</td>
        <td colspan="3"><b>Brake System</b></td>
        <td colspan="3"></td>
        <td></td>
    </tr>	
    <tr>
        <td colspan="1">Propeller Shft</td>
        <td colspan="5">{{ $reportdata['con_propeller_shft'] }}</td>
        <td colspan="3">Brake Pedal</td>
        <td colspan="3">{{ $reportdata['con_brake_padel'] }}</td>
        <td></td>
    </tr>	
    <tr>
        <td colspan="1">Rear Housing</td>
        <td colspan="5">{{ $reportdata['con_rear_housing'] }}</td>
        <td colspan="3">Brake Booster</td>
        <td colspan="3">{{ $reportdata['con_brake_booster'] }}</td>
        <td></td>
    </tr>	
    <tr>
        <td colspan="1"><b>Steering System</b> </td>
        <td colspan="5"></td>
        <td colspan="3">Brake Pipes</td>
        <td colspan="3">{{ $reportdata['con_brake_pipes'] }}</td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1">Steering Wheel </td>
        <td colspan="5">{{ $reportdata['con_steering_wheel'] }}</td>
        <td colspan="3">Air Cyl</td>
        <td colspan="3">{{ $reportdata['con_air_cyl'] }}</td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1">Steering Box</td>
        <td colspan="5">{{ $reportdata['con_steering_box'] }}</td>
        <td colspan="3">Governer</td>
        <td colspan="3">{{ $reportdata['con_governer'] }}</td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1">Stg. Column</td>
        <td colspan="5">{{ $reportdata['con_stg_column'] }}</td>
        <td colspan="3"><b>Others</b></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1">Stg. Linkages</td>
        <td colspan="5">{{ $reportdata['con_stg_linkages'] }}</td>
        <td colspan="3">Wheel Discs</td>
        <td colspan="3">{{ $reportdata['con_wheel_discs'] }}</td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1"><b>Suspension System </b></td>
        <td colspan="5"></td>
        <td colspan="3">Fr.Rhs Tyre Make</td>
        <td colspan="3">{{ $reportdata['con_fr_rhs_tyre_make'] }}</td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1">Fr.Suspension</td>
        <td colspan="5">{{ $reportdata['con_fr_suspension'] }}</td>
        <td colspan="3">Fr.Lhs.Tyre Make</td>
        <td colspan="3">{{ $reportdata['con_fr_lhs_tyre_make'] }}</td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1">Rr.Suspension</td>
        <td colspan="5">{{ $reportdata['con_rr_suspension'] }}</td>
        <td colspan="3">Rr.Rhs.Tyre Make</td>
        <td colspan="3">{{ $reportdata['con_rr_rhs_tyre_make'] }}</td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1"><b>Load Body  - Tipper</b></td>
        <td colspan="5"></td>
        <td colspan="3">Rr.Lhs.Tyre Make</td>
        <td colspan="3">{{ $reportdata['con_rr_lhs_tyre_take'] }}</td>
        <td></td>
    </tr>									
    <tr>
        <td colspan="1">Lhs Wing</td>
        <td colspan="5">{{ $reportdata['con_lhs_wing'] }}</td>
        <td colspan="3">Stepney</td>
        <td colspan="3">{{ $reportdata['con_stepney'] }}</td>
        <td></td>
    </tr>									
    <tr>
        <td colspan="1">Rhs Wing</td>
        <td colspan="5">{{ $reportdata['con_rhs_wing'] }}</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>									
    <tr>
        <td colspan="1">Tail Gate</td>
        <td colspan="5">{{ $reportdata['con_tail_gate'] }}</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>									
    <tr>
        <td colspan="1">Floor</td>
        <td colspan="5">{{ $reportdata['con_floor'] }}</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>									
    <tr>
        <td colspan="1"></td>
        <td colspan="5"></td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>									
    <tr>
        <td colspan="4"><b>Original Records Verified(Y/N)</b></td>
        <td colspan="2">{{ $reportdata['con_record_verify'] }}</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1"></td>
        <td colspan="5"></td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="3"></td>
        <td style="color: #c48ee8;" colspan="6"><h3>ACCESSORIES FOUND AT THE TIME OF INSECTION</h3></td>
        <td colspan="2"></td>
        <td colspan="1"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1">Audio</td>
        <td colspan="5">{{ $reportdata['acc_audio'] }}</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1">Air conditioner</td>
        <td colspan="5">{{ $reportdata['acc_air_conditioner'] }}</td>
        <td colspan="3">Horn</td>
        <td colspan="3">{{ $reportdata['acc_audio'] }}</td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1">Upholstery</td>
        <td colspan="5">{{ $reportdata['acc_Upholstery'] }}</td>
        <td colspan="3">Mist Lamp</td>
        <td colspan="3">{{ $reportdata['acc_Mist_Lamp'] }}</td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1">Power Steering</td>
        <td colspan="5">{{ $reportdata['acc_Power_Steering'] }}</td>
        <td colspan="3">Rear Wiper</td>
        <td colspan="3">{{ $reportdata['acc_Rear_Wiper'] }}</td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1">Power Window</td>
        <td colspan="5">{{ $reportdata['acc_Power_Window'] }}</td>
        <td colspan="3">Sun C/Film</td>
        <td colspan="3">{{ $reportdata['acc_Sun_C_Film'] }}</td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1">Central Locking</td>
        <td colspan="5">{{ $reportdata['acc_Central_Locking'] }}</td>
        <td colspan="3">Spoiler</td>
        <td colspan="3">{{ $reportdata['acc_Spoiler'] }}</td>
        <td></td>
    </tr>									
    <tr>
        <td colspan="1">Demister</td>
        <td colspan="5">{{ $reportdata['acc_Demister'] }}</td>
        <td colspan="3">Gas kit</td>
        <td colspan="3">{{ $reportdata['acc_Gas_kit'] }}</td>
        <td></td>
    </tr>									
    <tr>
        <td colspan="1">Alloy Wheel</td>
        <td colspan="5">{{ $reportdata['acc_Alloy_Wheel'] }}</td>
        <td colspan="3">Carrier</td>
        <td colspan="3">{{ $reportdata['acc_Carrier'] }}</td>
        <td></td>
    </tr>									
    <tr>
        <td colspan="1">Crash Guard</td>
        <td colspan="5">{{ $reportdata['acc_Crash_Guard'] }}</td>
        <td colspan="3">Any other</td>
        <td colspan="3">{{ $reportdata['acc_Any_other'] }}</td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1"></td>
        <td colspan="5"></td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="3"></td>
        <td style="color: #c48ee8;" colspan="6"><h3>Others</h3></td>
        <td colspan="2"></td>
        <td colspan="1"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1"></td>
        <td colspan="5"></td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="4">Dedupe from Valuaer data Bsase</td>
        <td colspan="2">{{ $reportdata['acc_Dedupe_data_Bsase'] }}</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="4">if dedupe is Neagative, reason for:</td>
        <td colspan="2">{{ $reportdata['acc_if_dedupe_Neagative'] }}</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="4">If this vehcile is recently inspected by Valuer, reason for valuation:</td>
        <td colspan="2">{{ $reportdata['acc_if_vehcile_inspected_Valuer'] }}</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="4">is this vehcile migrated from other area:</td>
        <td colspan="2">{{ $reportdata['acc_is_vehcile_migrated_other_area'] }}</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1"></td>
        <td colspan="5"></td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="3"></td>
        <td style="color: #c48ee8;" colspan="6"><h3>Overall condition of the vehicle</h3></td>
        <td colspan="2"></td>
        <td colspan="1"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1"></td>
        <td colspan="5"></td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="3">{{ $reportdata['acc_Working_condition'] }}</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1"></td>
        <td colspan="5"></td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="3"></td>
        <td style="color: #c48ee8;" colspan="6"><h3>REMARKS</h3></td>
        <td colspan="2"></td>
        <td colspan="1"></td>
        <td></td>
    </tr>
     <tr>
        <td colspan="1"></td>
        <td colspan="5"></td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="4">Insurance Details</td>
        <td colspan="2">{{ $reportdata['rem_Insurance_Details'] }}</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="4">Policy NO</td>
        <td colspan="2">{{ $reportdata['rem_Policy_NO'] }}</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="4">Up to</td>
        <td colspan="2">{{ $reportdata['rem_Up_to'] }}</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="4">IDV</td>
        <td colspan="2">{{ $reportdata['rem_IDV'] }}</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="4">Accidents (if any)</td>
        <td colspan="2">{{ $reportdata['rem_Accidents'] }}</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="4">Any major repairs undertaken</td>
        <td colspan="2">{{ $reportdata['rem_major_repairs_undertaken'] }}</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="4">Estimated further life of the vehicle…..years</td>
        <td colspan="2">{{ $reportdata['acc_Estimated_life_vehicle'] }}</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="4">Estimated expenses involved to take the vehicle to road</td>
        <td colspan="2">{{ $reportdata['rem_Estimated_expenses_involved'] }}</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="4">MARKET VALUE AS ON DATE OF INSPECTION</td>
        <td colspan="2">{{ $reportdata['rem_market_value'] }}</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1"></td>
        <td colspan="5"></td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="4">Pencil imprint of Chassis Number</td>
        <td colspan="2">{{ $reportdata['rem_pencil_chassis_no'] }}</td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1"></td>
        <td colspan="5"></td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>

    <tr>
        <td colspan="1">Enclosures attached</td>
        <td colspan="5"></td>
        <td colspan="3">TARAK MEHTA</td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1">1 Photos ( Front and Rear)</td>
        <td colspan="5"></td>
        <td colspan="3">Valuer / Surveyor</td>
        <td colspan="3"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1">2 Other enclosures - NIL</td>
        <td colspan="5"></td>
        <td colspan="3"></td>
        <td colspan="3"></td>
        <td></td>
    </tr>
</table>
    <style>
    tr td {
        background-color: #ffffff;
          /*border-bottom: 1px solid #000000;*/
    }
    </style>
</html>