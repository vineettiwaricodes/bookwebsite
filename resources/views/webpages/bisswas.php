<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

use Restserver\Libraries\REST_Controller;

class Hospital_verification extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('api/Custom_model', 'Custom_model');
        $this->load->model('api/Hospital_verification_model', 'Hospital_verification_model');
        $this->load->database();
        date_default_timezone_set('Asia/Calcutta');
    }
    
    //list
    public function index_get()
    {
      
       $result = $this->Hospital_verification_model->getAllFormData();
      
       if(!empty($result))
       {
            $this->response([
                'status' => '1', 'message' => "Hospital Verification  found Successfully","records" =>$result], REST_Controller::HTTP_OK);
        }else{

            $this->response([
                'status' => '0', 'message' => "Hospital Verification not found !"], REST_Controller::HTTP_OK);
        }
    }

    /* add */
    public function add_post()
    {
        $params  = json_decode(trim(file_get_contents('php://input')), TRUE);
        if ($this->Custom_model->getallheaders()['CONTENT_TYPE'] == 'application/json')
        {
            if (isset($params['hospital_name']) && !empty($params['hospital_name']) && isset($params['hospital_type']) && !empty($params['hospital_type']))
            {
                // hospital info
                $data['hospital_name']                           = $params['hospital_name'];
                $data['hospital_type']                           = $params['hospital_type'];
                $data['district']                                = $params['district'];
                $data['phone']                                   = $params['phone'];
                $data['fax']                                     = $params['fax'];
                $data['lattitude_hospital']                      = $params['lattitude_hospital'];
                $data['longitude_hosptal']                       = $params['longitude_hosptal'];
                $data['date_of_visit']                           = $params['date_of_visit'];
                $data['num_of_doctors']                          = $params['num_of_doctors'];
                $data['num_of_nurses']                           = $params['num_of_nurses'];
                $data['ambulance_category']                      = $params['ambulance_category'];
                
                // photo
                
                // hospital photo
                if (isset($params['photo_hospital']) && !empty($params['photo_hospital']))
                {
                    $photo_hospital = $this->getImageNameToBase64($params['photo_hospital']);
                    if(!empty($photo_hospital) && $photo_hospital!=='0' && $photo_hospital!=='2')
                    {
                        $data['photo_hospital'] = $photo_hospital;
                    }
                    else{
                         $this->response([
                            'status' => '0', 'message' => "Please provide valide base 64 string for signature 1"], REST_Controller::HTTP_OK);
                    }
                }
                else
                {
                    $data['photo_hospital'] = '';
                }
                
                if (isset($params['photo_pharmacy']) && !empty($params['photo_pharmacy']))
                {
                    $photo_pharmacy = $this->getImageNameToBase64($params['photo_pharmacy']);
                    if(!empty($photo_pharmacy) && $photo_pharmacy!=='0' && $photo_pharmacy!=='2')
                    {
                        $data['photo_pharmacy'] = $photo_pharmacy;
                    }
                    else{
                         $this->response([
                            'status' => '0', 'message' => "Please provide valide base 64 string for signature 1"], REST_Controller::HTTP_OK);
                    }
                }
                else
                {
                    $data['photo_pharmacy'] = '';
                }
                
                if (isset($params['photo_bloodbak']) && !empty($params['photo_bloodbak']))
                {
                    $photo_bloodbak = $this->getImageNameToBase64($params['photo_bloodbak']);
                    if(!empty($photo_bloodbak) && $photo_bloodbak!=='0' && $photo_bloodbak!=='2')
                    {
                        $data['photo_bloodbak'] = $photo_bloodbak;
                    }
                    else{
                         $this->response([
                            'status' => '0', 'message' => "Please provide valide base 64 string for signature 1"], REST_Controller::HTTP_OK);
                    }
                }
                else
                {
                    $data['photo_bloodbak'] = '';
                }
                
                if (isset($params['photo_lab']) && !empty($params['photo_lab']))
                {
                    $photo_lab = $this->getImageNameToBase64($params['photo_lab']);
                    if(!empty($photo_lab) && $photo_lab!=='0' && $photo_lab!=='2')
                    {
                        $data['photo_lab'] = $photo_lab;
                    }
                    else{
                         $this->response([
                            'status' => '0', 'message' => "Please provide valide base 64 string for signature 1"], REST_Controller::HTTP_OK);
                    }
                }
                else
                {
                    $data['photo_lab'] = '';
                }
                //
                 if (isset($params['photo_radiology']) && !empty($params['photo_radiology']))
                {
                    $photo_radiology = $this->getImageNameToBase64($params['photo_radiology']);
                    if(!empty($photo_radiology) && $photo_radiology!=='0' && $photo_radiology!=='2')
                    {
                        $data['photo_radiology'] = $photo_radiology;
                    }
                    else{
                         $this->response([
                            'status' => '0', 'message' => "Please provide valide base 64 string for signature 1"], REST_Controller::HTTP_OK);
                    }
                }
                else
                {
                    $data['photo_radiology'] = '';
                }
                //
                    if (isset($params['photo_radiology']) && !empty($params['photo_radiology']))
                {
                    $photo_radiology = $this->getImageNameToBase64($params['photo_radiology']);
                    if(!empty($photo_radiology) && $photo_radiology!=='0' && $photo_radiology!=='2')
                    {
                        $data['photo_radiology'] = $photo_radiology;
                    }
                    else{
                         $this->response([
                            'status' => '0', 'message' => "Please provide valide base 64 string for signature 1"], REST_Controller::HTTP_OK);
                    }
                }
                else
                {
                    $data['photo_radiology'] = '';
                }
                //
                    if (isset($params['photo_icu_with_ventialor']) && !empty($params['photo_icu_with_ventialor']))
                {
                    $photo_icu_with_ventialor = $this->getImageNameToBase64($params['photo_icu_with_ventialor']);
                    if(!empty($photo_icu_with_ventialor) && $photo_icu_with_ventialor!=='0' && $photo_icu_with_ventialor!=='2')
                    {
                        $data['photo_icu_with_ventialor'] = $photo_icu_with_ventialor;
                    }
                    else{
                         $this->response([
                            'status' => '0', 'message' => "Please provide valide base 64 string for signature 1"], REST_Controller::HTTP_OK);
                    }
                }
                else
                {
                    $data['photo_icu_with_ventialor'] = '';
                }
                //
                     if (isset($params['photo_ambulance']) && !empty($params['photo_ambulance']))
                {
                    $photo_ambulance = $this->getImageNameToBase64($params['photo_ambulance']);
                    if(!empty($photo_ambulance) && $photo_ambulance!=='0' && $photo_ambulance!=='2')
                    {
                        $data['photo_ambulance'] = $photo_ambulance;
                    }
                    else{
                         $this->response([
                            'status' => '0', 'message' => "Please provide valide base 64 string for signature 1"], REST_Controller::HTTP_OK);
                    }
                }
                else
                {
                    $data['photo_ambulance'] = '';
                }
                //
                    if (isset($params['photo_emergency']) && !empty($params['photo_emergency']))
                {
                    $photo_emergency = $this->getImageNameToBase64($params['photo_emergency']);
                    if(!empty($photo_emergency) && $photo_emergency!=='0' && $photo_emergency!=='2')
                    {
                        $data['photo_emergency'] = $photo_emergency;
                    }
                    else{
                         $this->response([
                            'status' => '0', 'message' => "Please provide valide base 64 string for signature 1"], REST_Controller::HTTP_OK);
                    }
                }
                else
                {
                    $data['photo_emergency'] = '';
                }
                //
                    if (isset($params['photo_nursing_roster']) && !empty($params['photo_nursing_roster']))
                {
                    $photo_nursing_roster = $this->getImageNameToBase64($params['photo_nursing_roster']);
                    if(!empty($photo_nursing_roster) && $photo_nursing_roster!=='0' && $photo_nursing_roster!=='2')
                    {
                        $data['photo_nursing_roster'] = $photo_nursing_roster;
                    }
                    else{
                         $this->response([
                            'status' => '0', 'message' => "Please provide valide base 64 string for signature 1"], REST_Controller::HTTP_OK);
                    }
                }
                else
                {
                    $data['photo_nursing_roster'] = '';
                }
                //
                    if (isset($params['photo_mrd']) && !empty($params['photo_mrd']))
                {
                    $photo_mrd = $this->getImageNameToBase64($params['photo_mrd']);
                    if(!empty($photo_mrd) && $photo_mrd!=='0' && $photo_mrd!=='2')
                    {
                        $data['photo_mrd'] = $photo_mrd;
                    }
                    else{
                         $this->response([
                            'status' => '0', 'message' => "Please provide valide base 64 string for signature 1"], REST_Controller::HTTP_OK);
                    }
                }
                else
                {
                    $data['photo_mrd'] = '';
                }
                //
                    if (isset($params['photo_record']) && !empty($params['photo_record']))
                {
                    $photo_record = $this->getImageNameToBase64($params['photo_record']);
                    if(!empty($photo_record) && $photo_record!=='0' && $photo_record!=='2')
                    {
                        $data['photo_record'] = $photo_record;
                    }
                    else{
                         $this->response([
                            'status' => '0', 'message' => "Please provide valide base 64 string for signature 1"], REST_Controller::HTTP_OK);
                    }
                }
                else
                {
                    $data['photo_record'] = '';
                }
                //
                    if (isset($params['photo_hr_certificate']) && !empty($params['photo_hr_certificate']))
                {
                    $photo_hr_certificate = $this->getImageNameToBase64($params['photo_hr_certificate']);
                    if(!empty($photo_hr_certificate) && $photo_hr_certificate!=='0' && $photo_hr_certificate!=='2')
                    {
                        $data['photo_hr_certificate'] = $photo_hr_certificate;
                    }
                    else{
                         $this->response([
                            'status' => '0', 'message' => "Please provide valide base 64 string for signature 1"], REST_Controller::HTTP_OK);
                    }
                }
                else
                {
                    $data['photo_hr_certificate'] = '';
                }
                
               //
                    if (isset($params['photo_pollution']) && !empty($params['photo_pollution']))
                {
                    $photo_pollution = $this->getImageNameToBase64($params['photo_pollution']);
                    if(!empty($photo_pollution) && $photo_pollution!=='0' && $photo_pollution!=='2')
                    {
                        $data['photo_pollution'] = $photo_pollution;
                    }
                    else{
                         $this->response([
                            'status' => '0', 'message' => "Please provide valide base 64 string for signature 1"], REST_Controller::HTTP_OK);
                    }
                }
                else
                {
                    $data['photo_pollution'] = '';
                }
                //
                
                   if (isset($params['photo_fire_clearance']) && !empty($params['photo_fire_clearance']))
                {
                    $photo_fire_clearance = $this->getImageNameToBase64($params['photo_fire_clearance']);
                    if(!empty($photo_fire_clearance) && $photo_fire_clearance!=='0' && $photo_fire_clearance!=='2')
                    {
                        $data['photo_fire_clearance'] = $photo_fire_clearance;
                    }
                    else{
                         $this->response([
                            'status' => '0', 'message' => "Please provide valide base 64 string for signature 1"], REST_Controller::HTTP_OK);
                    }
                }
                else
                {
                    $data['photo_fire_clearance'] = '';
                }
                //
                    if (isset($params['photo_bmw_certificate']) && !empty($params['photo_bmw_certificate']))
                {
                    $photo_bmw_certificate = $this->getImageNameToBase64($params['photo_bmw_certificate']);
                    if(!empty($photo_bmw_certificate) && $photo_bmw_certificate!=='0' && $photo_bmw_certificate!=='2')
                    {
                        $data['photo_bmw_certificate'] = $photo_bmw_certificate;
                    }
                    else{
                         $this->response([
                            'status' => '0', 'message' => "Please provide valide base 64 string for signature 1"], REST_Controller::HTTP_OK);
                    }
                }
                else
                {
                    $data['photo_bmw_certificate'] = '';
                }
                //
                
                    if (isset($params['photo_safe_drinking']) && !empty($params['photo_safe_drinking']))
                {
                    $photo_safe_drinking = $this->getImageNameToBase64($params['photo_safe_drinking']);
                    if(!empty($photo_safe_drinking) && $photo_safe_drinking!=='0' && $photo_safe_drinking!=='2')
                    {
                        $data['photo_safe_drinking'] = $photo_safe_drinking;
                    }
                    else{
                         $this->response([
                            'status' => '0', 'message' => "Please provide valide base 64 string for signature 1"], REST_Controller::HTTP_OK);
                    }
                }
                else
                {
                    $data['photo_safe_drinking'] = '';
                }
                //
                    if (isset($params['photo_waiting_area']) && !empty($params['photo_waiting_area']))
                {
                    $photo_waiting_area = $this->getImageNameToBase64($params['photo_waiting_area']);
                    if(!empty($photo_waiting_area) && $photo_waiting_area!=='0' && $photo_waiting_area!=='2')
                    {
                        $data['photo_waiting_area'] = $photo_waiting_area;
                    }
                    else{
                         $this->response([
                            'status' => '0', 'message' => "Please provide valide base 64 string for signature 1"], REST_Controller::HTTP_OK);
                    }
                }
                else
                {
                    $data['photo_waiting_area'] = '';
                }
                //
                    if (isset($params['photo_electricity']) && !empty($params['photo_electricity']))
                {
                    $photo_electricity = $this->getImageNameToBase64($params['photo_electricity']);
                    if(!empty($photo_electricity) && $photo_electricity!=='0' && $photo_electricity!=='2')
                    {
                        $data['photo_electricity'] = $photo_electricity;
                    }
                    else{
                         $this->response([
                            'status' => '0', 'message' => "Please provide valide base 64 string for signature 1"], REST_Controller::HTTP_OK);
                    }
                }
                else
                {
                    $data['photo_electricity'] = '';
                }
                //
                    if (isset($params['photo_investigator']) && !empty($params['photo_investigator']))
                {
                    $photo_investigator = $this->getImageNameToBase64($params['photo_investigator']);
                    if(!empty($photo_investigator) && $photo_investigator!=='0' && $photo_investigator!=='2')
                    {
                        $data['photo_investigator'] = $photo_investigator;
                    }
                    else{
                         $this->response([
                            'status' => '0', 'message' => "Please provide valide base 64 string for signature 1"], REST_Controller::HTTP_OK);
                    }
                }
                else
                {
                    $data['photo_investigator'] = '';
                }
                
                
                
                
                
                
                
                
                /*
                 commented to pending work
                //$data['was_surgery_performed']                   = $params['photo_hospital'];
                //$data['performed_or_treatment_provided']         = $params['photo_pharmacy'];
                //$data['pre_anesthetic']                          = $params['photo_bloodbak'];
                $data['decision_to_operate']                     = $params['photo_lab'];
                $data['timing_of_operation']                     = $params['photo_radiology'];
                $data['timing_of_operation']                     = $params['photo_icu_with_ventialor'];
                $data['problems_in_functioning_of_ot']           = $params['photo_ambulance'];
               $data['grade_experience_of_surgeon_operating']   = $params['photo_emergency'];
               $data['post_operative_period	']                   = $params['photo_nursing_roster'];
               $data['post_operative_period	']                   = $params['photo_mrd'];
                $data['critical_care_unit']                      = $params['photo_record'];
                $data['primary_cause_of_death']                  = $params['photo_hr_certificate'];
                $data['icd_code_primary']                        = $params['photo_pollution'];
                $data['secondary_cause_of_death']                = $params['photo_fire_clearance'];
                $data['icd_code_secondary']                      = $params['photo_bmw_certificate'];
                $data['antecedent_cause_of_death']               = $params['photo_safe_drinking'];
                $data['icd_code_antecedent']                     = $params['photo_waiting_area'];
                $data['final_recommendations']                   = $params['photo_electricity'];
                $data['final_recommendation_2']                  = $params['photo_investigator'];
                
                **/
                
                
                //boolean yes/no
                $data['is_24hr_emergency']                       = $params['is_24hr_emergency'];
                $data['impatient_beds']                          = $params['impatient_beds'];
                $data['adequate_spacing']                        = $params['adequate_spacing'];
                $data['qualified_staffs']                        = $params['qualified_staffs'];
                $data['availiabilty_surgeon_services_offered']   = $params['availiabilty_surgeon_services_offered'];
                $data['availiabilty_obstetrician_services_offered'] = $params['availiabilty_obstetrician_services_offered'];
                $data['is_pharmacy']                                = $params['is_pharmacy'];
                $data['is_bloodbank']                           = $params['is_bloodbank'];
                $data['is_lab']                                 = $params['is_lab'];
                $data['is_radiology']                           = $params['is_radiology'];
                $data['post_op_icu_with_ventilator']            = $params['post_op_icu_with_ventilator'];
                $data['is_ambulance']                           = $params['is_ambulance'];
                $data['is_multi_sign_monitoring_equipment']     = $params['is_multi_sign_monitoring_equipment'];
                $data['is_infusion_ion_tropic']                 = $params['is_infusion_ion_tropic'];
                $data['is_equp_temp_body']                      = $params['is_equp_temp_body'];
                $data['is_weighing_scale']                      = $params['is_weighing_scale'];
                $data['is_emergency_crash_cart']                = $params['is_emergency_crash_cart'];
                $data['is_defibrillator']                       = $params['is_defibrillator'];
                $data['is_equp_for_ventilation']                = $params['is_equp_for_ventilation'];
                $data['is_equp_for_reuscitation']               = $params['is_equp_for_reuscitation'];
                $data['is_facility_offer_surgical_services']    = $params['is_facility_offer_surgical_services'];
                $data['is_fully_equiped']                       = $params['is_fully_equiped'];
                $data['is_auto_clave']                          = $params['is_auto_clave'];
                $data['is_sterilization_pulse_oxymeter']        = $params['is_sterilization_pulse_oxymeter'];
                $data['is_ot_table']                            = $params['is_ot_table'];
                $data['is_ot_lights']                           = $params['is_ot_lights'];
                $data['is_suction']                             = $params['is_suction'];
                $data['is_cautery']                             = $params['is_cautery'];
                $data['is_boyle_machine']                       = $params['is_boyle_machine'];
                $data['is_required_instruments']                = $params['is_required_instruments'];
                $data['is_nursing_round_clock']                 = $params['is_nursing_round_clock'];
                $data['is_post_op_ward']                        = $params['is_post_op_ward'];
                $data['is_mrd']                                 = $params['is_mrd'];
                $data['is_record_maintain_day_by_day']          = $params['is_record_maintain_day_by_day'];
                $data['is_info_share_with_stakeholder']         = $params['is_info_share_with_stakeholder'];
                $data['is_data_reported_pha']                   = $params['is_data_reported_pha'];
                $data['is_hr_certificate']                      = $params['is_hr_certificate'];
                $data['is_pollution_control_license']           = $params['is_pollution_control_license'];
                $data['is_fire_clearance_certificate']          = $params['is_fire_clearance_certificate'];
                $data['is_bio_medical_waster_certificate']      = $params['is_bio_medical_waster_certificate'];
                $data['is_safe_drinking']                       = $params['is_safe_drinking'];
                $data['is_waiting_area']                        = $params['is_waiting_area'];
                $data['is24hr_electricity']                     = $params['is24hr_electricity'];
                $data['is_cardiology']                          = $params['is_cardiology'];
                $data['is_cancer_care']                         = $params['is_cancer_care'];
                $data['is_neuro']                               = $params['is_neuro'];
                $data['is_burn']                                = $params['is_burn'];
                $data['is_pediatric']                           = $params['is_pediatric'];
                $data['is_specialize_new_born_services']        = $params['is_specialize_new_born_services'];
                $data['is_poly_trauma']                         = $params['is_poly_trauma'];
                $data['is_nephrology']                          = $params['is_nephrology'];
                $data['is_open_heart_tray']                     = $params['is_open_heart_tray'];
                $data['is_gas_pipline']                         = $params['is_gas_pipline'];
                $data['is_abg_machine']                         = $params['is_abg_machine'];
                $data['is_act_machine']                         = $params['is_act_machine'];
                $data['is_hypothermia']                         = $params['is_hypothermia'];
                $data['is_iabp']                                = $params['is_iabp'];
                $data['is_postop_vsupport']                     = $params['is_postop_vsupport'];
                $data['is_icu_with_cardiac']                    = $params['is_icu_with_cardiac'];
                $data['is_round_cardilogist']                   = $params['is_round_cardilogist'];
                $data['is_avaiable_general_physician']          = $params['is_avaiable_general_physician'];
                $data['is_fully_equip_catherization']           = $params['is_fully_equip_catherization'];
                $data['is_tumor_board']                         = $params['is_tumor_board'];
                $data['is_radio_chemo_therapy']                 = $params['is_radio_chemo_therapy'];
                $data['is_pathology_haemotology']               = $params['is_pathology_haemotology'];
                $data['is_radio_treatment']                     = $params['is_radio_treatment'];
                $data['is_availability_machine']                = $params['is_availability_machine'];
                $data['is_treatment_system']                    = $params['is_treatment_system'];
                $data['is_dosimetry']                           = $params['is_dosimetry'];
                $data['is_well_equpied']                        = $params['is_well_equpied'];
                $data['is_qualified_staffs']                    = $params['is_qualified_staffs'];
                $data['is_c_arm']                               = $params['is_c_arm'];
                $data['is_microscope']                          = $params['is_microscope'];
                $data['is_neuro_comptible_ot']                  = $params['is_neuro_comptible_ot'];
                $data['is_icu']                                 = $params['is_icu'];
                $data['is_mri_ct']                              = $params['is_mri_ct'];
                $data['is_on_call_service']                     = $params['is_on_call_service'];
                $data['is_iso_ward_monitor']                    = $params['is_iso_ward_monitor'];
                $data['is_iso_oxygen_line']                     = $params['is_iso_oxygen_line'];
                $data['is_iso_all_ot_equip']                    = $params['is_iso_all_ot_equip'];
                $data['is_trained_paramedics']                  = $params['is_trained_paramedics'];
                $data['is_post_op_rehab']                       = $params['is_post_op_rehab'];
                $data['is_full_time_surgeons']                  = $params['is_full_time_surgeons'];
                $data['is_support_service']                     = $params['is_support_service'];
                $data['is_mother_room']                         = $params['is_mother_room'];
                $data['is_iitv']                                = $params['is_iitv'];
                $data['is_nicu']                                = $params['is_nicu'];
                $data['is_radiant']                             = $params['is_radiant_warmer'];
                $data['is_incubator']                           = $params['is_incubator'];
                $data['is_pulse_oxymeter']                      = $params['is_pulse_oxymeter'];
                $data['is_weighing_scale']                      = $params['is_weighing_scale'];
                $data['is_infusion_pump']                       = $params['is_infusion_pump'];
                $data['is_venti']                               = $params['is_venti'];
                $data['is_monitoring_system']                   = $params['is_monitoring_system'];
                $data['is_oxygen_supply']                       = $params['is_oxygen_supply'];
                $data['is_breast_pump']                         = $params['is_breast_pump'];
                $data['is_bilimeter']                           = $params['is_bilimeter'];
                $data['is_kmc']                                 = $params['is_kmc'];
                $data['is_transport_incubator']                 = $params['is_transport_incubator'];
                $data['is_parental_nutrition']                  = $params['is_parental_nutrition'];
                $data['is_laminar']                             = $params['is_laminar'];
                $data['is_invase']                              = $params['is_invase'];
                $data['is_house_usg']                           = $params['is_house_usg'];
                $data['is_ophthalmologist_on_call']             = $params['is_ophthalmologist_on_call'];
                $data['is_trained_nurses']                      = $params['is_trained_nurses'];
                $data['is_trained_pediatricians']               = $params['is_trained_pediatricians'];
                $data['is_full_time_oga']                       = $params['is_full_time_oga'];
                $data['is_emergenecy_theatre_round']            = $params['is_emergenecy_theatre_round'];
                $data['mark_as_completed']                      = !empty($params['mark_as_completed']) ? $params['mark_as_completed'] : '0';
                
                // common
                $data['created']                                  = date('Y-m-d H:i:s');
                $data['status']                                   = 1;


                $return_id = $this->Hospital_verification_model->add_Hospital_verification($data);

                if($return_id){

                    $this->response([
                        'status' => '1', 'message' => "Hospital verification Added Successfully"], REST_Controller::HTTP_OK);
                }else{

                    $this->response([
                        'status' => '0', 'message' => "Something went wrong try again !"], REST_Controller::HTTP_OK);
                }
                
            }else{
                
                $this->response([
                    'status' => '0', 'message' => "Please Provide All Fields"], REST_Controller::HTTP_OK);
            }

        }else{
            $this->response([
                'status' => '0', 'message' => "Data Format is not valid !"], REST_Controller::HTTP_OK);
        }
    }
    
    
    /* edit */
    
     public function update_post()
    {
        $params  = json_decode(trim(file_get_contents('php://input')), TRUE);
        if ($this->Custom_model->getallheaders()['CONTENT_TYPE'] == 'application/json')
        {
            if (isset($params['id']) && !empty($params['id']))
            {
                // hospital info
                $data['hospital_name']                           = $params['hospital_name'];
                $data['hospital_type']                           = $params['hospital_type'];
                $data['district']                                = $params['district'];
                $data['phone']                                   = $params['phone'];
                $data['fax']                                     = $params['fax'];
                $data['lattitude_hospital']                      = $params['lattitude_hospital'];
                $data['longitude_hosptal']                       = $params['longitude_hosptal'];
                $data['date_of_visit']                           = $params['date_of_visit'];
                $data['num_of_doctors']                         = $params['num_of_doctors'];
                $data['num_of_nurses']                           = $params['num_of_nurses'];
                $data['ambulance_category']                      = $params['ambulance_category'];
                
                // photo
                
                // hospital photo
                if (isset($params['photo_hospital']) && !empty($params['photo_hospital']))
                {
                    $photo_hospital = $this->getImageNameToBase64($params['photo_hospital']);
                    if(!empty($photo_hospital) && $photo_hospital!=='0' && $photo_hospital!=='2')
                    {
                        $data['photo_hospital'] = $photo_hospital;
                    }
                    else{
                         $this->response([
                            'status' => '0', 'message' => "Please provide valide base 64 string for signature 1"], REST_Controller::HTTP_OK);
                    }
                }
                else
                {
                    $data['photo_hospital'] = '';
                }
                
                if (isset($params['photo_pharmacy']) && !empty($params['photo_pharmacy']))
                {
                    $photo_pharmacy = $this->getImageNameToBase64($params['photo_pharmacy']);
                    if(!empty($photo_pharmacy) && $photo_pharmacy!=='0' && $photo_pharmacy!=='2')
                    {
                        $data['photo_pharmacy'] = $photo_pharmacy;
                    }
                    else{
                         $this->response([
                            'status' => '0', 'message' => "Please provide valide base 64 string for signature 1"], REST_Controller::HTTP_OK);
                    }
                }
                else
                {
                    $data['photo_pharmacy'] = '';
                }
                
                if (isset($params['photo_bloodbak']) && !empty($params['photo_bloodbak']))
                {
                    $photo_bloodbak = $this->getImageNameToBase64($params['photo_bloodbak']);
                    if(!empty($photo_bloodbak) && $photo_bloodbak!=='0' && $photo_bloodbak!=='2')
                    {
                        $data['photo_bloodbak'] = $photo_bloodbak;
                    }
                    else{
                         $this->response([
                            'status' => '0', 'message' => "Please provide valide base 64 string for signature 1"], REST_Controller::HTTP_OK);
                    }
                }
                else
                {
                    $data['photo_bloodbak'] = '';
                }
                
                if (isset($params['photo_lab']) && !empty($params['photo_lab']))
                {
                    $photo_lab = $this->getImageNameToBase64($params['photo_lab']);
                    if(!empty($photo_lab) && $photo_lab!=='0' && $photo_lab!=='2')
                    {
                        $data['photo_lab'] = $photo_lab;
                    }
                    else{
                         $this->response([
                            'status' => '0', 'message' => "Please provide valide base 64 string for signature 1"], REST_Controller::HTTP_OK);
                    }
                }
                else
                {
                    $data['photo_lab'] = '';
                }
                //
                 if (isset($params['photo_radiology']) && !empty($params['photo_radiology']))
                {
                    $photo_radiology = $this->getImageNameToBase64($params['photo_radiology']);
                    if(!empty($photo_radiology) && $photo_radiology!=='0' && $photo_radiology!=='2')
                    {
                        $data['photo_radiology'] = $photo_radiology;
                    }
                    else{
                         $this->response([
                            'status' => '0', 'message' => "Please provide valide base 64 string for signature 1"], REST_Controller::HTTP_OK);
                    }
                }
                else
                {
                    $data['photo_radiology'] = '';
                }
                //
                    if (isset($params['photo_radiology']) && !empty($params['photo_radiology']))
                {
                    $photo_radiology = $this->getImageNameToBase64($params['photo_radiology']);
                    if(!empty($photo_radiology) && $photo_radiology!=='0' && $photo_radiology!=='2')
                    {
                        $data['photo_radiology'] = $photo_radiology;
                    }
                    else{
                         $this->response([
                            'status' => '0', 'message' => "Please provide valide base 64 string for signature 1"], REST_Controller::HTTP_OK);
                    }
                }
                else
                {
                    $data['photo_radiology'] = '';
                }
                //
                    if (isset($params['photo_icu_with_ventialor']) && !empty($params['photo_icu_with_ventialor']))
                {
                    $photo_icu_with_ventialor = $this->getImageNameToBase64($params['photo_icu_with_ventialor']);
                    if(!empty($photo_icu_with_ventialor) && $photo_icu_with_ventialor!=='0' && $photo_icu_with_ventialor!=='2')
                    {
                        $data['photo_icu_with_ventialor'] = $photo_icu_with_ventialor;
                    }
                    else{
                         $this->response([
                            'status' => '0', 'message' => "Please provide valide base 64 string for signature 1"], REST_Controller::HTTP_OK);
                    }
                }
                else
                {
                    $data['photo_icu_with_ventialor'] = '';
                }
                //
                    if (isset($params['photo_ambulance']) && !empty($params['photo_ambulance']))
                {
                    $photo_ambulance = $this->getImageNameToBase64($params['photo_ambulance']);
                    if(!empty($photo_ambulance) && $photo_ambulance!=='0' && $photo_ambulance!=='2')
                    {
                        $data['photo_ambulance'] = $photo_ambulance;
                    }
                    else{
                         $this->response([
                            'status' => '0', 'message' => "Please provide valide base 64 string for signature 1"], REST_Controller::HTTP_OK);
                    }
                }
                else
                {
                    $data['photo_ambulance'] = '';
                }
                //
                    if (isset($params['photo_emergency']) && !empty($params['photo_emergency']))
                {
                    $photo_emergency = $this->getImageNameToBase64($params['photo_emergency']);
                    if(!empty($photo_emergency) && $photo_emergency!=='0' && $photo_emergency!=='2')
                    {
                        $data['photo_emergency'] = $photo_emergency;
                    }
                    else{
                         $this->response([
                            'status' => '0', 'message' => "Please provide valide base 64 string for signature 1"], REST_Controller::HTTP_OK);
                    }
                }
                else
                {
                    $data['photo_emergency'] = '';
                }
                //
                    if (isset($params['photo_nursing_roster']) && !empty($params['photo_nursing_roster']))
                {
                    $photo_nursing_roster = $this->getImageNameToBase64($params['photo_nursing_roster']);
                    if(!empty($photo_nursing_roster) && $photo_nursing_roster!=='0' && $photo_nursing_roster!=='2')
                    {
                        $data['photo_nursing_roster'] = $photo_nursing_roster;
                    }
                    else{
                         $this->response([
                            'status' => '0', 'message' => "Please provide valide base 64 string for signature 1"], REST_Controller::HTTP_OK);
                    }
                }
                else
                {
                    $data['photo_nursing_roster'] = '';
                }
                //
                    if (isset($params['photo_mrd']) && !empty($params['photo_mrd']))
                {
                    $photo_mrd = $this->getImageNameToBase64($params['photo_mrd']);
                    if(!empty($photo_mrd) && $photo_mrd!=='0' && $photo_mrd!=='2')
                    {
                        $data['photo_mrd'] = $photo_mrd;
                    }
                    else{
                         $this->response([
                            'status' => '0', 'message' => "Please provide valide base 64 string for signature 1"], REST_Controller::HTTP_OK);
                    }
                }
                else
                {
                    $data['photo_mrd'] = '';
                }
                //
                    if (isset($params['photo_record']) && !empty($params['photo_record']))
                {
                    $photo_record = $this->getImageNameToBase64($params['photo_record']);
                    if(!empty($photo_record) && $photo_record!=='0' && $photo_record!=='2')
                    {
                        $data['photo_record'] = $photo_record;
                    }
                    else{
                         $this->response([
                            'status' => '0', 'message' => "Please provide valide base 64 string for signature 1"], REST_Controller::HTTP_OK);
                    }
                }
                else
                {
                    $data['photo_record'] = '';
                }
                //
                    if (isset($params['photo_hr_certificate']) && !empty($params['photo_hr_certificate']))
                {
                    $photo_hr_certificate = $this->getImageNameToBase64($params['photo_hr_certificate']);
                    if(!empty($photo_hr_certificate) && $photo_hr_certificate!=='0' && $photo_hr_certificate!=='2')
                    {
                        $data['photo_hr_certificate'] = $photo_hr_certificate;
                    }
                    else{
                         $this->response([
                            'status' => '0', 'message' => "Please provide valide base 64 string for signature 1"], REST_Controller::HTTP_OK);
                    }
                }
                else
                {
                    $data['photo_hr_certificate'] = '';
                }
                
               //
                    if (isset($params['photo_pollution']) && !empty($params['photo_pollution']))
                {
                    $photo_pollution = $this->getImageNameToBase64($params['photo_pollution']);
                    if(!empty($photo_pollution) && $photo_pollution!=='0' && $photo_pollution!=='2')
                    {
                        $data['photo_pollution'] = $photo_pollution;
                    }
                    else{
                         $this->response([
                            'status' => '0', 'message' => "Please provide valide base 64 string for signature 1"], REST_Controller::HTTP_OK);
                    }
                }
                else
                {
                    $data['photo_pollution'] = '';
                }
                //
                
                   if (isset($params['photo_fire_clearance']) && !empty($params['photo_fire_clearance']))
                {
                    $photo_fire_clearance = $this->getImageNameToBase64($params['photo_fire_clearance']);
                    if(!empty($photo_fire_clearance) && $photo_fire_clearance!=='0' && $photo_fire_clearance!=='2')
                    {
                        $data['photo_fire_clearance'] = $photo_fire_clearance;
                    }
                    else{
                         $this->response([
                            'status' => '0', 'message' => "Please provide valide base 64 string for signature 1"], REST_Controller::HTTP_OK);
                    }
                }
                else
                {
                    $data['photo_fire_clearance'] = '';
                }
                //
                    if (isset($params['photo_bmw_certificate']) && !empty($params['photo_bmw_certificate']))
                {
                    $photo_bmw_certificate = $this->getImageNameToBase64($params['photo_bmw_certificate']);
                    if(!empty($photo_bmw_certificate) && $photo_bmw_certificate!=='0' && $photo_bmw_certificate!=='2')
                    {
                        $data['photo_bmw_certificate'] = $photo_bmw_certificate;
                    }
                    else{
                         $this->response([
                            'status' => '0', 'message' => "Please provide valide base 64 string for signature 1"], REST_Controller::HTTP_OK);
                    }
                }
                else
                {
                    $data['photo_bmw_certificate'] = '';
                }
                //
                
                    if (isset($params['photo_safe_drinking']) && !empty($params['photo_safe_drinking']))
                {
                    $photo_safe_drinking = $this->getImageNameToBase64($params['photo_safe_drinking']);
                    if(!empty($photo_safe_drinking) && $photo_safe_drinking!=='0' && $photo_safe_drinking!=='2')
                    {
                        $data['photo_safe_drinking'] = $photo_safe_drinking;
                    }
                    else{
                         $this->response([
                            'status' => '0', 'message' => "Please provide valide base 64 string for signature 1"], REST_Controller::HTTP_OK);
                    }
                }
                else
                {
                    $data['photo_safe_drinking'] = '';
                }
                //
                    if (isset($params['photo_waiting_area']) && !empty($params['photo_waiting_area']))
                {
                    $photo_waiting_area = $this->getImageNameToBase64($params['photo_waiting_area']);
                    if(!empty($photo_waiting_area) && $photo_waiting_area!=='0' && $photo_waiting_area!=='2')
                    {
                        $data['photo_waiting_area'] = $photo_waiting_area;
                    }
                    else{
                         $this->response([
                            'status' => '0', 'message' => "Please provide valide base 64 string for signature 1"], REST_Controller::HTTP_OK);
                    }
                }
                else
                {
                    $data['photo_waiting_area'] = '';
                }
                //
                    if (isset($params['photo_electricity']) && !empty($params['photo_electricity']))
                {
                    $photo_electricity = $this->getImageNameToBase64($params['photo_electricity']);
                    if(!empty($photo_electricity) && $photo_electricity!=='0' && $photo_electricity!=='2')
                    {
                        $data['photo_electricity'] = $photo_electricity;
                    }
                    else{
                         $this->response([
                            'status' => '0', 'message' => "Please provide valide base 64 string for signature 1"], REST_Controller::HTTP_OK);
                    }
                }
                else
                {
                    $data['photo_electricity'] = '';
                }
                //
                    if (isset($params['photo_investigator']) && !empty($params['photo_investigator']))
                {
                    $photo_investigator = $this->getImageNameToBase64($params['photo_investigator']);
                    if(!empty($photo_investigator) && $photo_investigator!=='0' && $photo_investigator!=='2')
                    {
                        $data['photo_investigator'] = $photo_investigator;
                    }
                    else{
                         $this->response([
                            'status' => '0', 'message' => "Please provide valide base 64 string for signature 1"], REST_Controller::HTTP_OK);
                    }
                }
                else
                {
                    $data['photo_investigator'] = '';
                }
                
                
                
                
                
                
                
                
                /*
                 commented to pending work
                //$data['was_surgery_performed']                   = $params['photo_hospital'];
                //$data['performed_or_treatment_provided']         = $params['photo_pharmacy'];
                //$data['pre_anesthetic']                          = $params['photo_bloodbak'];
                $data['decision_to_operate']                     = $params['photo_lab'];
                $data['timing_of_operation']                     = $params['photo_radiology'];
                $data['timing_of_operation']                     = $params['photo_icu_with_ventialor'];
                $data['problems_in_functioning_of_ot']           = $params['photo_ambulance'];
               $data['grade_experience_of_surgeon_operating']   = $params['photo_emergency'];
               $data['post_operative_period	']                   = $params['photo_nursing_roster'];
               $data['post_operative_period	']                   = $params['photo_mrd'];
                $data['critical_care_unit']                      = $params['photo_record'];
                $data['primary_cause_of_death']                  = $params['photo_hr_certificate'];
                $data['icd_code_primary']                        = $params['photo_pollution'];
                $data['secondary_cause_of_death']                = $params['photo_fire_clearance'];
                $data['icd_code_secondary']                      = $params['photo_bmw_certificate'];
                $data['antecedent_cause_of_death']               = $params['photo_safe_drinking'];
                $data['icd_code_antecedent']                     = $params['photo_waiting_area'];
                $data['final_recommendations']                   = $params['photo_electricity'];
                $data['final_recommendation_2']                  = $params['photo_investigator'];
                
                **/
                
                
                //boolean yes/no
                $data['is_24hr_emergency']                       = $params['is_24hr_emergency'];
                $data['impatient_beds']                          = $params['impatient_beds'];
                $data['adequate_spacing']                        = $params['adequate_spacing'];
                $data['qualified_staffs']                        = $params['qualified_staffs'];
                $data['availiabilty_surgeon_services_offered']   = $params['availiabilty_surgeon_services_offered'];
                $data['availiabilty_obstetrician_services_offered'] = $params['availiabilty_obstetrician_services_offered'];
                $data['is_pharmacy']                                = $params['is_pharmacy'];
                $data['is_bloodbank']                           = $params['is_bloodbank'];
                $data['is_lab']                                 = $params['is_lab'];
                $data['is_radiology']                           = $params['is_radiology'];
                $data['post_op_icu_with_ventilator']            = $params['post_op_icu_with_ventilator'];
                $data['is_ambulance']                           = $params['is_ambulance'];
                $data['is_multi_sign_monitoring_equipment']     = $params['is_multi_sign_monitoring_equipment'];
                $data['is_infusion_ion_tropic']                 = $params['is_infusion_ion_tropic'];
                $data['is_equp_temp_body']                      = $params['is_equp_temp_body'];
                $data['is_weighing_scale']                      = $params['is_weighing_scale'];
                $data['is_emergency_crash_cart']                = $params['is_emergency_crash_cart'];
                $data['is_defibrillator']                       = $params['is_defibrillator'];
                $data['is_equp_for_ventilation']                = $params['is_equp_for_ventilation'];
                $data['is_equp_for_reuscitation']               = $params['is_equp_for_reuscitation'];
                $data['is_facility_offer_surgical_services']    = $params['is_facility_offer_surgical_services'];
                $data['is_fully_equiped']                       = $params['is_fully_equiped'];
                $data['is_auto_clave']                          = $params['is_auto_clave'];
                $data['is_sterilization_pulse_oxymeter']        = $params['is_sterilization_pulse_oxymeter'];
                $data['is_ot_table']                            = $params['is_ot_table'];
                $data['is_ot_lights']                           = $params['is_ot_lights'];
                $data['is_suction']                             = $params['is_suction'];
                $data['is_cautery']                             = $params['is_cautery'];
                $data['is_boyle_machine']                       = $params['is_boyle_machine'];
                $data['is_required_instruments']                = $params['is_required_instruments'];
                $data['is_nursing_round_clock']                 = $params['is_nursing_round_clock'];
                $data['is_post_op_ward']                        = $params['is_post_op_ward'];
                $data['is_mrd']                                 = $params['is_mrd'];
                $data['is_record_maintain_day_by_day']          = $params['is_record_maintain_day_by_day'];
                $data['is_info_share_with_stakeholder']         = $params['is_info_share_with_stakeholder'];
                $data['is_data_reported_pha']                   = $params['is_data_reported_pha'];
                $data['is_hr_certificate']                      = $params['is_hr_certificate'];
                $data['is_pollution_control_license']           = $params['is_pollution_control_license'];
                $data['is_fire_clearance_certificate']          = $params['is_fire_clearance_certificate'];
                $data['is_bio_medical_waster_certificate']      = $params['is_bio_medical_waster_certificate'];
                $data['is_safe_drinking']                       = $params['is_safe_drinking'];
                $data['is_waiting_area']                        = $params['is_waiting_area'];
                $data['is24hr_electricity']                     = $params['is24hr_electricity'];
                $data['is_cardiology']                          = $params['is_cardiology'];
                $data['is_cancer_care']                         = $params['is_cancer_care'];
                $data['is_neuro']                               = $params['is_neuro'];
                $data['is_burn']                                = $params['is_burn'];
                $data['is_pediatric']                           = $params['is_pediatric'];
                $data['is_specialize_new_born_services']        = $params['is_specialize_new_born_services'];
                $data['is_poly_trauma']                         = $params['is_poly_trauma'];
                $data['is_nephrology']                          = $params['is_nephrology'];
                $data['is_open_heart_tray']                     = $params['is_open_heart_tray'];
                $data['is_gas_pipline']                         = $params['is_gas_pipline'];
                $data['is_abg_machine']                         = $params['is_abg_machine'];
                $data['is_act_machine']                         = $params['is_act_machine'];
                $data['is_hypothermia']                         = $params['is_hypothermia'];
                $data['is_iabp']                                = $params['is_iabp'];
                $data['is_postop_vsupport']                     = $params['is_postop_vsupport'];
                $data['is_icu_with_cardiac']                    = $params['is_icu_with_cardiac'];
                $data['is_round_cardilogist']                   = $params['is_round_cardilogist'];
                $data['is_avaiable_general_physician']          = $params['is_avaiable_general_physician'];
                $data['is_fully_equip_catherization']           = $params['is_fully_equip_catherization'];
                $data['is_tumor_board']                         = $params['is_tumor_board'];
                $data['is_radio_chemo_therapy']                 = $params['is_radio_chemo_therapy'];
                $data['is_pathology_haemotology']               = $params['is_pathology_haemotology'];
                $data['is_radio_treatment']                     = $params['is_radio_treatment'];
                $data['is_availability_machine']                = $params['is_availability_machine'];
                $data['is_treatment_system']                    = $params['is_treatment_system'];
                $data['is_dosimetry']                           = $params['is_dosimetry'];
                $data['is_well_equpied']                        = $params['is_well_equpied'];
                $data['is_qualified_staffs']                    = $params['is_qualified_staffs'];
                $data['is_c_arm']                               = $params['is_c_arm'];
                $data['is_microscope']                          = $params['is_microscope'];
                $data['is_neuro_comptible_ot']                  = $params['is_neuro_comptible_ot'];
                $data['is_icu']                                 = $params['is_icu'];
                $data['is_mri_ct']                              = $params['is_mri_ct'];
                $data['is_on_call_service']                     = $params['is_on_call_service'];
                $data['is_iso_ward_monitor']                    = $params['is_iso_ward_monitor'];
                $data['is_iso_oxygen_line']                     = $params['is_iso_oxygen_line'];
                $data['is_iso_all_ot_equip']                    = $params['is_iso_all_ot_equip'];
                $data['is_trained_paramedics']                  = $params['is_trained_paramedics'];
                $data['is_post_op_rehab']                       = $params['is_post_op_rehab'];
                $data['is_full_time_surgeons']                  = $params['is_full_time_surgeons'];
                $data['is_support_service']                     = $params['is_support_service'];
                $data['is_mother_room']                         = $params['is_mother_room'];
                $data['is_iitv']                                = $params['is_iitv'];
                $data['is_nicu']                        = $params['is_nicu'];
                $data['is_radiant']                     = $params['is_radiant_warmer'];
                $data['is_incubator']                   = $params['is_incubator'];
                $data['is_pulse_oxymeter']              = $params['is_pulse_oxymeter'];
                $data['is_weighing_scale']              = $params['is_weighing_scale'];
                $data['is_infusion_pump']               = $params['is_infusion_pump'];
                $data['is_venti']                       = $params['is_venti'];
                $data['is_monitoring_system']           = $params['is_monitoring_system'];
                $data['is_oxygen_supply']               = $params['is_oxygen_supply'];
                $data['is_breast_pump']                 = $params['is_breast_pump'];
                $data['is_bilimeter']                   = $params['is_bilimeter'];
                $data['is_kmc']                         = $params['is_kmc'];
                $data['is_transport_incubator']         = $params['is_transport_incubator'];
                $data['is_parental_nutrition']          = $params['is_parental_nutrition'];
                $data['is_laminar']                     = $params['is_laminar'];
                $data['is_invase']                      = $params['is_invase'];
                $data['is_house_usg']                   = $params['is_house_usg'];
                $data['is_ophthalmologist_on_call']     = $params['is_ophthalmologist_on_call'];
                $data['is_trained_nurses']              = $params['is_trained_nurses'];
                $data['is_trained_pediatricians']       = $params['is_trained_pediatricians'];
                $data['is_full_time_oga']               = $params['is_full_time_oga'];
                $data['is_emergenecy_theatre_round']    = $params['is_emergenecy_theatre_round'];
                
                $data['mark_as_completed']             = !empty($params['mark_as_completed']) ? $params['mark_as_completed'] : '0';
                // common
                $data['created']                                  = date('Y-m-d H:i:s');
                $data['status']                                = 1;


               $return_id = $this->Hospital_verification_model->update_hospital_verification($data, $params['id']);


                if($return_id){

                    $this->response([
                        'status' => '1', 'message' => "Hospital verification Updated Successfully"], REST_Controller::HTTP_OK);
                }else{

                    $this->response([
                        'status' => '0', 'message' => "Something went wrong try again !"], REST_Controller::HTTP_OK);
                }
                
            }else{
                
                $this->response([
                    'status' => '0', 'message' => "Please Provide All Fields"], REST_Controller::HTTP_OK);
            }

        }else{
            $this->response([
                'status' => '0', 'message' => "Data Format is not valid !"], REST_Controller::HTTP_OK);
        }
    }
    
    
        // print form
    public function printForm_post()
    {
        $params = json_decode(trim(file_get_contents('php://input')), TRUE);
        if ($this->Custom_model->getallheaders()['CONTENT_TYPE'] == 'application/json')
        {
            if (isset($params['id']) && !empty($params['id']))
            {   
                $this->load->library('pdf');
                $html = $this->getFormView($params['id']);
                
                // echo $html; die;
				// Load HTML content
				$this->pdf->loadHtml($html);
				$this->pdf->setPaper('A4', 'portrait');
				$this->pdf->render();
                $output = $this->pdf->output();
                $filename = 'Hospitalverification_'.time().'.pdf';
                $path = 'uploads/hospitalverification_pdf/'.$filename;
                $uploadImage = file_put_contents($path, $output);
                $fileUrl = base_url().$path;

                if(true)
                {
                    $this->response([
                        'status' => '1', 'message' => "Form Pdf generate successfully !","form_url"=>$fileUrl], REST_Controller::HTTP_OK);
                }
				
            }
            else{               
                    $this->response([
                        'status' => '0', 'message' => "Please Provide All Fields"], REST_Controller::HTTP_OK);
                }
        }
        else{
                $this->response([
                    'status' => '0', 'message' => "Data Format is not valid !"], REST_Controller::HTTP_OK);
            }
    }
    
    public function getFormView($id){
        $getFormData = $this->Hospital_verification_model->getDetails($id);
        // return '<img src="' . base_url('uploads/hospital_config_image/' . $getFormData['photo_hospital']) . '" alt="" width="100%" height="auto" />';
        
        $html = '<!DOCTYPE html>
        <html>
           <head>
              <title>Hospital Form</title>
           </head>
             <style>
            h2{
            background-color: #f2f2f2;
            padding:8px;
            text-align:center;
             }
        
               table,th, td {
               width:100%;
               padding: 10px;
            }
                th,td {
                vertical-align: top;
                font-size:18px;
               }
         </style>
          <body>
     
      <h2 align="center">Information of the Hospital</h2>
      <table border="0" align="center" width="70%">
         <tr>
            <td width="50%">District:</td>
            <th>' . $getFormData['district'] . '</th>
         </tr>
         <tr>
            <td width="50%">Name of the Hospital</td>
            <th>' . $getFormData['hospital_name'] . '</th>
         </tr>
         <tr>
            <td width="50%">Mobile Number</td>
            <th>' . $getFormData['phone'] . '</th>
         </tr>
         <tr>
            <td width="50%">Fax</td>
            <th>' . $getFormData['fax'] . '</th>
         </tr>
         <tr>
            <td width="50%">Type of Hospital:-</td>
            <th>' . $getFormData['hospital_type'] . '</th>
         </tr>
          <tr>
            <td width="50%">Lattitude of Hospital:-</td>
            <th>' . $getFormData['lattitude_hospital'] . '</th>
         </tr>
          <tr>
            <td width="50%">Longitude of Hospital:-</td>
            <th>' . $getFormData['longitude_hosptal'] . '</th>
         </tr>
         <tr>
            <td width="50%">Date of visit-</td>
            <th>' . $getFormData['date_of_visit'] . '</th>
         </tr>
         <tr>
            <td width="100%">Take a Photo of Hospital</td>
            <td width="100%"></td>
        </tr>
        <tr>
            <td width="100%">';
             if($getFormData['photo_hospital']){$html.='<img src="' . base_url('uploads/hospital_info/' . $getFormData['photo_hospital']) . '" alt="" width="750px" />';}
       $html.='</td><td></td>
         </tr>
      </table>
      <br><br>
      <h2 align="center">Basic Criteria</h2>
      <table border="0" align="center" width="70%">
         <tr>
            <td width="50%">Does the facility have minimum of
               10 inpatient beds?
            </td>
            <th>' . ($getFormData['impatient_beds'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
        
         <tr>
            <td width="50%">Does the facility have adequate
               spacing @80 sq. ft. per bed?
            </td>
            <th>' .($getFormData['adequate_spacing'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Does the facility have adequate
               and qualified supporting staff as per
               prescribed norms?
            </td>
            <th>' . ($getFormData['qualified_staffs'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Number of Nurses</td>
            <th>' . $getFormData['num_of_nurses'] . '</th>
         </tr>
         <tr>
            <td width="50%">Number of Doctors</td>
            <th>' . $getFormData['num_of_doctors'] . '</th>
         </tr>
         <tr>
            <td width="50%">Does the facility have round the
               clock availability of Surgeon &
               Anaesthetist where surgical services
               are offered?
            </td>
            <th>' .($getFormData['availiabilty_surgeon_services_offered'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
      </table>
      <br>
      <table border="0" align="center" width="70%">
         <tr>
            <td width="50%"> 24*7 systems available for Pharmacy</td>
            <th>' .($getFormData['is_pharmacy'] == 1 ? 'Yes' : 'No'). '</th>
         </tr>
        <tr>
            <td width="100%"> ' . ($getFormData['is_pharmacy'] == 1 ? '</td>
            
            <td width="100%">
               <img src="' . base_url('uploads/hospital_info/' . $getFormData['photo_pharmacy']) . '" alt="img" width="700px" height="auto">
            </td>
         </tr>' : '') .  '
         
         <tr>
            <td width="50%">Blood Bank</td>
            <th>' . ($getFormData['is_bloodbank'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
        <tr>
            <td width="100%">' . ($getFormData['is_bloodbank'] == 1 ? '</td>
            <td width="100%">
               <img src="' . base_url('uploads/hospital_info/' . $getFormData['photo_bloodbak']) . '" alt="img" width="700px" height="auto">
            </td>
         </tr>' : '') .  '
         <tr>
            <td width="50%">Laboratory</td>
            <th>' . ($getFormData['is_lab'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
       <tr>
            <td width="100%"> ' . ($getFormData['is_lab'] == 1 ? '</td>
            <td width="100%"><br>
               <img src="' . base_url('uploads/hospital_info/' . $getFormData['photo_lab']) . '" alt="img" width="700px" height="auto">
            </td>
         </tr>' : '') .  '
         <tr>
            <td width="50%">Radiology</td>
            <th  width="50%">' . ($getFormData['is_radiology'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
       <tr>
            <td width="100%"> ' . ($getFormData['is_radiology'] == 1 ? '</td>
            <td width="100%"><br>
               <img src="' . base_url('uploads/hospital_info/' . $getFormData['photo_radiology']) . '" alt="img" width="700px" height="auto">
            </td>
         </tr>' : '') .  '
         <tr>
            <td width="50%">Post -operative ICU care with ventilator support:-</td>
            <th width="50%">' . ($getFormData['post_op_icu_with_ventilator'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
        <tr>
            <td width="100%">' . ($getFormData['post_op_icu_with_ventilator'] == 1 ? '</td>
            <td width="100%"><br>
               <img src="' . base_url('uploads/hospital_info/' . $getFormData['photo_icu_with_ventialor']) . '" alt="img" width="700px" height="auto" />
            </td>
         </tr>' : '') .  '
         <tr>
            <td width="100%">Is 24*7 ambulance facilities available?</td>
            <th  width="100%">' . ($getFormData['is_ambulance'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         ' . ($getFormData['is_ambulance'] == 1 ? '<tr>
            <td width="50%">Photo of ambulance facilities available:-</td>
            <td width="100%"><br>
               <img src="' . base_url('uploads/hospital_info/' . $getFormData['photo_ambulance']) . '" alt="img" width="700px" height="auto" />
            </td>
         </tr>' : '') .  '
         <tr>
            <td width="50%">If Yes,Then Own or Tie up</td>
            <th>' .($getFormData['is_ambulance'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Does the facility offer 24 hours
              emergency services?
            </td>
            <th>' .($getFormData['is_24hr_emergency'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
        ' . ($getFormData['is_24hr_emergency'] == 1 ? '<tr>
            <td width="50%"></td>
            <td width="100%"><br>
              <img src="' . base_url('uploads/hospital_info/' . $getFormData['photo_emergency']) . '" alt="img" width="700px" height="auto" />
            </td>
         </tr>' : '') .  '
         <tr>
            <td width="50%">Multi-sign monitoring equipment</td>
            <th>' . ($getFormData['is_multi_sign_monitoring_equipment'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Infusion of ion tropic support</td>
            <th>' . ($getFormData['is_infusion_ion_tropic'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Equipment for maintenance of body temperature</td>
            <th>' . ($getFormData['is_equp_temp_body'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Weighting scale</td>
            <th>' . ($getFormData['is_weighing_scale'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Emergency Crash Cart</td>
            <th>' . ($getFormData['is_emergency_crash_cart'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Defibrillator</td>
            <th>' . ($getFormData['is_defibrillator'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Equipment for ventilation</td>
            <th>' . ($getFormData['is_equp_for_ventilation'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Equipment for reuscitation</td>
            <th>' . ($getFormData['is_equp_for_reuscitation'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Does the facility offer surgical services</td>
             <th>' . ($getFormData['is_facility_offer_surgical_services'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Fully equipped operation theater</td>
            <th>' . ($getFormData['is_fully_equiped'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Auto clave</td>
           <th>' . ($getFormData['is_auto_clave'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Sterilization pulse oximeter</td>
             <th>' . ($getFormData['is_sterilization_pulse_oxymeter'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">OT Table</td>
            <th>' . ($getFormData['is_ot_table'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">OT Light</td>
           <th>' . ($getFormData['is_ot_lights'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Suction</td>
           <th>' . ($getFormData['is_suction'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Cautery</td>
            <th>' . ($getFormData['is_cautery'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Boyle\'s Machine</td>
            <th>' . ($getFormData['is_boyle_machine'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Required Instruments</td>
            <th>' . ($getFormData['is_required_instruments'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Dedicated nursing staff for surgical services round the clock</td>
            <th>' . ($getFormData['is_nursing_round_clock'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
       ' . ($getFormData['is_nursing_round_clock'] == 1 ? '<tr>
            <td width="50%"></td>
            <td width="100%"><br>
               <img src="' . base_url('uploads/hospital_info/' . $getFormData['photo_nursing_roster']) . '" alt="img" width="700px" height="auto" />
            </td>
         </tr>' : '') .  '
         <tr>
            <td width="50%">Post-operative</td>
            <th>' . ($getFormData['is_post_op_ward'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Is There Presence of MRD (Medical Records Department)in the Hospital</td>
            <th>' .($getFormData['is_mrd'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
       ' . ($getFormData['is_mrd'] == 1 ? '<tr>
            <td width="50%">Photo of MRD:-</td>
            <td width="100%"><br>
               <img src="' . base_url('uploads/hospital_info/' . $getFormData['photo_mrd']) . '" alt="img" width="700px" height="auto" />
            </td>
         </tr>' : '') .  '
         <tr>
            <td width="50%">Is the Record being maintained on day to day basis?</td>
            <th>' . ($getFormData['is_record_maintain_day_by_day'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
       ' . ($getFormData['is_record_maintain_day_by_day'] == 1 ? '<tr>
            <td width="50%">Photo of Record:-</td>
            <td width="100%"><br>
               <img src="' . base_url('uploads/hospital_info/' . $getFormData['photo_record']) . '" alt="img" width="700px" height="auto" />
            </td>
         </tr>' : '') .  '
       
         <tr>
            <td width="50%">Is reported to public Health authorities shared on periodic basis?</td>
            <th>' . ($getFormData['is_data_reported_pha'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>

          <tr>
            <td width="50%">Hospital Registration Certificate</td>
            <th>' . ($getFormData['is_hr_certificate'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
       ' . ($getFormData['is_hr_certificate'] == 1 ? '<tr>
            <td width="50%">Photo of Record:-</td>
            <td width="100%"><br>
               <img src="' . base_url('uploads/hospital_info/' . $getFormData['photo_hr_certificate']) . '" alt="img" width="700px" height="auto" />
            </td>
         </tr>' : '') .  '
        
        
         <tr>
            <td width="50%">Pollution control board license</td>
            <th>' . ($getFormData['is_pollution_control_license'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
        ' . ($getFormData['is_pollution_control_license'] == 1 ? '<tr>
            <td width="50%"></td>
            <td width="100%"><br>
               <img src="' . base_url('uploads/hospital_info/' . $getFormData['photo_pollution']) . '" alt="img" width="700px" height="auto" />
            </td>
         </tr>' : '') .  '
         <tr>
            <td width="50%">Fire clearance certificate</td>
            <th>' . ($getFormData['is_fire_clearance_certificate'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
        ' . ($getFormData['is_fire_clearance_certificate'] == 1 ? '<tr>
            <td width="50%"></td>
            <td width="100%"><br>
               <img src="' . base_url('uploads/hospital_info/' . $getFormData['photo_fire_clearance']) . '" alt="img" width="700px" height="auto" />
            </td>
         </tr>' : '') .  '
         <tr>
            <td width="50%">Bio-Medical waste Management certificate</td>
            <th>' . ($getFormData['is_bio_medical_waster_certificate'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
        ' . ($getFormData['is_bio_medical_waster_certificate'] == 1 ? '<tr>
            <td width="50%"></td>
            <td width="100%"><br>
               <img src="' . base_url('uploads/hospital_info/' . $getFormData['photo_bmw_certificate']) . '" alt="img" width="700px" height="auto" />
            </td>
         </tr>' : '') .  '
         <tr>
            <td width="50%">Does the facility offer patient care waiting area</td>
             <th>' . ($getFormData['is_waiting_area'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
        ' . ($getFormData['is_waiting_area'] == 1 ? '<tr>
            <td width="50%"></td>
            <td width="100%"><br>
               <img src="' . base_url('uploads/hospital_info/' . $getFormData['photo_waiting_area']) . '" alt="img" width="700px" height="auto" />
            </td>
         </tr>' : '') .  '
         <tr>
            <td width="50%">Does the facility offer uniterrupted(24 hour) supply of electricity?</td>
            <th>' . ($getFormData['is24hr_electricity'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
        ' . ($getFormData['is24hr_electricity'] == 1 ? '<tr>
            <td width="50%"></td>
            <td width="100%"><br>
               <img src="' . base_url('uploads/hospital_info/' . $getFormData['photo_electricity']) . '" alt="img" width="700px" height="auto" />
            </td>
         </tr>' : '') .  '
         <tr>
            <td width="50%">Cardiology/CTVS</td>
            <th>' . ($getFormData['is_cardiology'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Cancer Care</td>
            <th>' . ($getFormData['is_cancer_care'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Neurosurgery</td>
           <th>' . ($getFormData['is_neuro'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Burn-Plastic,Reconstructive surgery</td>
            <th>' . ($getFormData['is_burn'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Pediatric surgery </td>
            <th>' . ($getFormData['is_pediatric'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Poly-trauma</td>
            <th>' . ($getFormData['is_poly_trauma'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Nephrology/Urology</td>
            <th>' . ($getFormData['is_nephrology'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">CTVS theater facility Open Heart Tray</td>
            <th>' . ($getFormData['is_open_heart_tray'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Gas pipelines/Lung Machine with TCM</td>
            <th>' . ($getFormData['is_gas_pipline'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">ABG Machine</td>
             <th>' . ($getFormData['is_abg_machine'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">ACT Machine</td>
            <th>' . ($getFormData['is_act_machine'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Hypothermia Machine</td>
            <th>' . ($getFormData['is_hypothermia'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">IABP</td>
           <th>' . ($getFormData['is_iabp'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Post-op with ventilator support</td>
            <th>' . ($getFormData['is_postop_vsupport'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">ICU Facility with cardiac monitoring</td>
            <th>' . ($getFormData['is_icu_with_cardiac'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Round the clock cardiologist services available</td>
            <th>' . ($getFormData['is_round_cardilogist'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Availability of support specialty of General Physician</td>
            <th>' . ($getFormData['is_avaiable_general_physician'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Fully equipped Catheterization Laboratory Unit with qualified and trained Paramedics</td>
            <th>' . ($getFormData['is_fully_equip_catherization'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Is tumor Board available in the empaneled hospital</td>
            <th>' . ($getFormData['is_tumor_board'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         
         <tr>
            <td width="50%">Radio therapy  and chemotherapy treatments are available in the empaneled hospital</td>
            <th>' . ($getFormData['is_radio_chemo_therapy'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Does the facility provider certain specialized radiation treatment package (Stereotactic radio surgery)</td>
            <th>' . ($getFormData['is_radio_treatment'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Associated Treatment planning System</td>
             <th>' . ($getFormData['is_treatment_system'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Availability of machines which can deliver</td>
            <th>' . ($getFormData['is_availability_machine'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
        
         <tr>
            <td width="50%">Well Equipped theater</td>
            <th>' . ($getFormData['is_well_equpied'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Qualified paramedical staff</td>
             <th>' . ($getFormData['is_qualified_staffs'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">C-Arm</td>
            <th>' . ($getFormData['is_c_arm'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Microscope</td>
            <th>' . ($getFormData['is_microscope'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Neurosurgery compatible OT table with head holding frame (horse shoe, may field/sugita or equivalent frame)</td>
             <th>' . ($getFormData['is_neuro_comptible_ot'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">ICU Facility</td>
            <th>' . ($getFormData['is_icu'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Does the hospital provide on call-services for post burn contractures with requisite infrastructure</td>
            <th>' . ($getFormData['is_on_call_service'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Availability of isolation ward having monitor</td>
            <th>' . ($getFormData['is_iso_ward_monitor'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Isolation having center oxygen line</td>
            <th>' . ($getFormData['is_iso_oxygen_line'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Isolation having ALL OT equipment</td>
            <th>' . ($getFormData['is_iso_all_ot_equip'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Trained Paramedics</td>
            <th>' . ($getFormData['is_trained_paramedics'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Post-op rehab/Physiotherapy support/Phycology support</td>
            <th>' . ($getFormData['is_post_op_rehab'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Does the hospital provide full time / on call services of pediatric surgeons</td>
            <th>' . ($getFormData['is_full_time_surgeons'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Support Service of Predictions</td>
           <th>' . ($getFormData['is_support_service'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         
         <tr>
            <td width="50%">Availability of radiological/ fluoroscopy service (Including IITV),Laboratory services and Blood Bank</td>
             <th>' . ($getFormData['is_iitv'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Does the hospital provide well-developed and equipped meonatal mursey or NICU</td>
            <th>' . ($getFormData['is_nicu'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Radient Warmer</td>
            <th>' . ($getFormData['is_radiant'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Incubator</td>
            <th>' . ($getFormData['is_incubator'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Pulse Oxymeter</td>
           <th>' . ($getFormData['is_pulse_oxymeter'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Infusion Pump</td>
           <th>' . ($getFormData['is_infusion_pump'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Ventilators</td>
           <th>' . ($getFormData['is_venti'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Monitoring System</td>
           <th>' . ($getFormData['is_monitoring_system'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Oxygen Supply</td>
           <th>' . ($getFormData['is_oxygen_supply'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Resuscitation equipment/breast pump</td>
            <th>' . ($getFormData['is_breast_pump'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Kangaroo Mother Care</td>
            <th>' . ($getFormData['is_kmc'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Transport Incubator</td>
             <th>' . ($getFormData['is_transport_incubator'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Parenteral Nutrition</td>
             <th>' . ($getFormData['is_parental_nutrition'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Laminar Flow Bench</td>
            <th>' . ($getFormData['is_laminar'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Invase Monitoring</td>
            <th>' . ($getFormData['is_invase'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">In House USG</td>
            <th>' . ($getFormData['is_house_usg'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Ophthalmologist on call</td>
             <th>' . ($getFormData['is_ophthalmologist_on_call'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Trained Nurse 24*7 as per norms</td>
             <th>' . ($getFormData['is_trained_nurses'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Trained Pediatricians round the clock</td>
             <th>' . ($getFormData['is_trained_pediatricians'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Full time service available of orthopaedic,general,anaesthetist</td>
            <th>' . ($getFormData['is_full_time_oga'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
         <tr>
            <td width="50%">Round the clock emergency theater available</td>
          <th>' . ($getFormData['is_emergenecy_theatre_round'] == 1 ? 'Yes' : 'No') . '</th>
         </tr>
        ' . ($getFormData['is_emergenecy_theatre_round'] == 1 ? '<tr>
            <td width="50%">Selfie of the AB-PMJAY Empanelment Investigator in Front of Facility(Take a Selfie(Photo)</td>
            <td width="100%"><br>
               <img src="' . base_url('uploads/hospital_info/' . $getFormData['photo_investigator']) . '" alt="img" width="700px" height="auto" />
            </td>
         </tr>' : '') .  '
      </table>
    
   </body>
</html>';

        return $html;
    }
    
    
    
    public function upload_tmp_image_post()
    {
        $params  = json_decode(trim(file_get_contents('php://input')), TRUE);
        if ($this->Custom_model->getallheaders()['CONTENT_TYPE'] == 'application/json')
        {
            if (isset($params['device_id']) && !empty($params['device_id']) && isset($params['image']) && !empty($params['image']))
            {
                //$result = $this->Hospital_verification_model->get_tmp_image_by_device_id($params['device_id']);
                
                // if($result){
                    
                //     $file = FCPATH . 'uploads/tmp_images/' . $result['image'];
                    
                //     if(file_exists($file) == 1){
                //         unlink($file);
                //     }
                    
                // }

                $data['device_id']  =   $params['device_id'];
                $data['image']      =   $this->getImageNameToBase64_tmp($params['image']);
                
                $return_id = $this->Hospital_verification_model->add_tmp_image($data);


                if($return_id){

                    $this->response([
                        'status' => '1', 'message' => "Request Fullfilled Successfully", "url" => base_url('/uploads/hospital_info/' . $data['image'])], REST_Controller::HTTP_OK);
                        
                }else{

                    $this->response([
                        'status' => '0', 'message' => "Something went wrong try again !"], REST_Controller::HTTP_OK);
                }
                
            }else{
                
                $this->response([
                        'status' => '0', 'message' => "Please Provide All Fields"], REST_Controller::HTTP_OK);
            }
    
        }else{
            
            $this->response([
                    'status' => '0', 'message' => "Data Format is not valid !"], REST_Controller::HTTP_OK);
        }
        
    }
   
    
   
   // return image
    public function getImageNameToBase64($imgName)
    {
        if(empty($imgName)){
            return '';
        }else{
            $url_array = explode('/', $imgName);
            $fileName = end($url_array);
            return $fileName;
        }
        
        $img = imagecreatefromstring(base64_decode($imgName));
        if ($img != false) {
            $image = $imgName;
            $img_name = time() . '_' . rand(0, 99999) . ".jpg";
            $path = 'uploads/hospital_info/' . $img_name;
            $uploadImage = file_put_contents($path, base64_decode($image));
            if($uploadImage)
            {
                return $img_name;
            }
            else{
                return 0;
            }
        }
        else{
            return 2;
        }
    }
    
    public function getImageNameToBase64_tmp($imgName)
    {
        
        $img = imagecreatefromstring(base64_decode($imgName));
        if ($img != false) {
            $image = $imgName;
            $img_name = time() . '_' . rand(0, 99999) . ".jpg";
            $path = 'uploads/hospital_info/' . $img_name;
            $uploadImage = file_put_contents($path, base64_decode($image));
            if($uploadImage)
            {
                return $img_name;
            }
            else{
                return 0;
            }
        }
        else{
            return 2;
        }
    }
    
    // district list
    public function getMasterData_get()
    {
       $data =[];
       $data['district'] = $this->Hospital_verification_model->getDistricts();
       $data['hospital'] = $this->Hospital_verification_model->getHospitals();
      
       if(!empty($data))
       {
            $this->response([
                'status' => '1', 'message' => "Master data list  found Successfully","records" =>$data], REST_Controller::HTTP_OK);
        }else{

            $this->response([
                'status' => '0', 'message' => "Master data list not found !", "records" =>[]], REST_Controller::HTTP_OK);
        }
    }
    
}