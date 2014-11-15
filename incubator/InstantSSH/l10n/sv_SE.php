<?php
/**
 * i-MSCP InstantSSH plugin
 * Copyright (C) 2014 Laurent Declercq <l.declercq@nuxwin.com>
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @translator W.Wichelmann (Cool) <undisclosed>
 */

return array(
	'Invalid default authentication options: %s' => 'Ogiltiga alternativ standard autentisering: %s',
	'Any authentication options defined in the default_ssh_auth_options parameter must be also defined in the allowed_ssh_auth_options parameter.' => 'Alla autentiseringsalternativ som förekommer i default_ssh_auth_options parameter måste också anges i allowed_ssh_auth_options parametern.',
	'allowed_ssh_auth_options parameter must be an array.' => 'Allowed_ssh_auth_options parametern måste vara en array.',
	'default_ssh_auth_options parameter must be a string.' => 'Default_ssh_auth_options parametern måste vara en sträng.',
	'SSH permissions' => 'SSH behörigheter',
	'SSH users' => 'SSH-användare',
	'This is the list of customers which are allowed to create SSH users to login on the system using SSH.' => 'Detta är en lista över kunder som får skapa SSH-användare att logga in på systemet med SSH.',
	'Customer name' => 'Kundens namn',
	'You must enter a customer name.' => 'Du måste ange ett kundnamn.',
	'Max SSH users' => 'Max SSH-användare',
	'Authentication options' => 'Autentiserings alternativ',
	'Restricted shell' => 'Begränsad shell',
	'Status' => 'Status',
	'Actions' => 'Åtgärder',
	'Processing...' => 'Bearbetning...',
	'Add / Edit SSH Permissions' => 'Lägg till / Redigera SSH Behörigheter',
	'Maximum number of SSH users' => 'Maximalt antal SSH-användare',
	'0 for unlimited' => '0 för obegränsad',
	'Enter a number' => 'Ange ett tal',
	'Enter a customer name' => 'Ange ett kundnamn',
	'Can edit authentication options' => 'Kan ändra autentiseringsalternativ',
	'See man authorized_keys for further details about authentication options.' => 'Se man authorized_keys för mer information om autentiseringsalternativ.',
	'Does the shell access have to be provided in restricted environment (recommended)?' => 'Är skalet tillträde skall tillhandahållas i begränsad miljö (rekommenderas)?',
	'Unknown customer. Please enter a valid customer name.'=> 'Okänd kund. Ange ett giltigt kundnamn.',
	'Are you sure you want to revoke SSH permissions for this customer?'=> 'Är du säker på att du vill återkalla SSH behörigheter för den här kunden?',
	'Unknown action.' => 'Okänd åtgärd.',
	'Request Timeout: The server took too long to send the data.' => 'Timeout Request: Servern tog för lång tid att skicka data.',
	'An unexpected error occurred.' => 'Ett oväntat fel inträffade.',
	'Save' => 'Spara',
	'Cancel' => 'Avbryt',
	'Admin / Settings / SSH Permissions' => 'Admin / Inställningar / SSH Behörigheter',
	'An unexpected error occurred: %s' => 'Ett oväntat fel inträffade: %s',
	'Bad request.' => 'Ogiltig begäran.',
	'All fields are required.' => 'Alla fält är obligatoriska.',
	'The username field is required.' => 'Användarnamnet fältet är obligatoriskt.',
	"Wrong value for the 'Maximum number of SSH keys' field. Please, enter a number." => "Fel värde för 'Maximalt antal SSH-nycklar' fält. Vänligen, ange en siffra.",
	'SSH permissions were added.' => 'SSH behörigheter sattes.',
	'SSH permissions were scheduled for update.' => 'SSH behörigheter var planerade för uppdatering.',
	'SSH permissions were scheduled for deletion.' => 'SSH behörigheter var planerade för radering.',
	'Edit permissions' => 'Redigera behörigheter',
	'Revoke permissions' => 'Återkalla behörigheter',
	'This is the list of SSH users associated with your account.'=> 'Detta är en lista över SSH-användare är kopplade till ditt konto.',
	"You can provide either a password, an SSH key or both. However, it's recommended to prefer key-based authentication." => "Du kan ge antingen ett lösenord, en SSH-nyckel eller båda. Men det är rekommenderat att föredra nyckelbaserad autentisering.",
	'You can generate your rsa key pair by running the following command:' => 'Du kan skapa din RSA-nyckelpar genom att köra följande kommando:',
	'Key fingerprint' => 'Nyckelns fingeravtryck',
	'SSH user' => 'SSH-användar',
	'Username' => 'Användarnamn',
	'Enter an username' => 'Ange ett användarnamn',
	'Password' => 'lösenord',
	'Enter a password' => 'Ange ett lösenord',
	'Password confirmation' => 'Bekräftelse lösenord',
	'Confirm the password' => 'Bekräfta lösenord',
	'SSH key' => 'SSH-nyckel',
	'Enter your SSH key' => 'Ange ditt SSH-nyckel',
	'Supported RSA key formats are PKCS#1, openSSH and XML Signature.' => 'Stöds RSA viktiga format är PKCS#1, OpenSSH och XML Signature.',
	'Are you sure you want to delete this SSH user?'=> 'Är du säker på att du vill ta bort denna SSH användare?',
	'Client / Profile / SSH Users' => 'Klient / Profile / SSH-användare',
	'Un-allowed username. Please use alphanumeric characters only.'=> 'Un-tillåtet användarnamn. Använd bara alfanumeriska tecken.',
	'The username is too long (Max 8 characters).' => 'Användarnamnet är för lång (max 8 tecken).',
	'This username is not available.' => 'Användarnamnet är inte tillgänglig.',
	'An SSH user with the same name or the same SSH key already exists.' => 'En SSH användare med samma namn eller samma SSH-nyckel finns redan.',
	'You must enter an SSH key.' => 'Du måste ange en SSH-nyckel.',
	'You must enter either a password, an SSH key or both.' => 'Du måste ange antingen ett lösenord, en SSH-nyckel eller båda.',
	'Un-allowed password. Please use alphanumeric characters only.' => 'Un-tillåtet lösenord. Använd bara alfanumeriska tecken.',
	'Wrong password length (Max 32 characters).' => 'Fel lösenord längd (Max 32 tecken).',
	'Wrong password length (Min 6 characters).' => 'Fel lösenord längd (Min 8 tecken).',
	'Passwords do not match.' => 'Lösenorden matchar inte.',
	'Invalid SSH key.' => 'Ogiltig SSH-nyckel.',
	'SSH user has been scheduled for addition.' => 'SSH-användare planerad till tillägg.',
	'Your SSH user limit is reached.' => 'Din SSH-användare gränsen är nådd.',
	'SSH user has been scheduled for update.' => 'SSH-användare planerad till uppdateringen.',
	'SSH user has been scheduled for deletion.' => 'SSH-användare planerad till radering.',
	'An unexpected error occurred. Please contact your reseller.'=> 'Ett oväntat fel inträffade. Vänligen kontakta din återförsäljare.',
	'Add / Edit SSH user' => 'Lägg till / redigera SSH-användare',
	'Delete this SSH user' => 'Ta bort den här SSH-användare',
	'Allowed authentication options: %s' => 'tillåtna autentiseringsalternativ: %s',
	'Unlimited' => 'Obegränsad',
	'Yes' => 'Ja',
	'No' => 'Nej',
);