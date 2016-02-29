<?php
$this->db->select('*')->select('users.user_id')->from('users')
->join('user_profile', 'user_profile.user_id = users.user_id', 'LEFT')
->join('user_profile_images', 'user_profile_images.image_id = user_profile.profile_image_id', 'LEFT')
->group_by('users.user_id')
->where('users.user_id', $user_id);
$query = $this->db->get();
