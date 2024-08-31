<?php

namespace App\Http\Controllers\Formularios;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
class ContactoController extends Controller
{
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'option' => 'required|string',
            'message' => 'required|string',
            'terms' => 'accepted',
        ]);

        
         // Enviar el correo electrónico
        Mail::raw("Nombre: {$validatedData['name']}\nEmail: {$validatedData['email']}\nOpción: {$validatedData['option']}\nMensaje: {$validatedData['message']}", function($message) use ($validatedData) {
            $message->to('info@toditititas.org')
                    ->subject('Nueva consulta de contacto');
        });

        // Enviar una respuesta al cliente
        return redirect()->back()->with('success', 'Tu información fue enviada con éxito. Nos pondremos en contacto contigo muy pronto.');

    }

    public function suscripcion(Request $request)
    {
        // Validar el correo electrónico
        $validatedData = $request->validate([
            'email' => 'required|email|max:255'
        ]);

            // Enviar el correo electrónico
        Mail::send('emails.subscription', [], function($message) use ($validatedData) {
            $message->to($validatedData['email'])
                    ->subject('Gracias por suscribirte a nuestro boletín');
        });

        // Enviar notificación a la organización
        Mail::raw("Nuevo suscriptor al boletín:\nEmail: {$validatedData['email']}", function($message) use ($validatedData) {
            $message->to('info@toditititas.org')
                    ->subject('Nueva suscripción al boletín');
        });
        if ($request->ajax()) {
            return response()->json(['message_suscripcion' => 'Te has suscrito con éxito. Pronto recibirás nuestras actualizaciones.'], 200);
        }

        // Redireccionar con mensaje de éxito
        return redirect()->back()->with('success_suscripcion', 'Te has suscrito con éxito. Pronto recibirás nuestras actualizaciones.');
    }
    public function unirse(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'nullable|string|max:255',
            'message' => 'nullable|string',
        ]);

        // Datos del correo para la organización
        $data = [
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'email' => $validatedData['email'],
            'address' => $validatedData['address'],
            'message' => $validatedData['message'],
        ];

        // Enviar el correo electrónico al usuario que se unió
        Mail::send('emails.unirse', $data, function($message) use ($validatedData) {
            $message->to($validatedData['email'])
                    ->subject('Gracias por unirte a nosotros');
        });

        // Enviar notificación a la organización
        Mail::raw("Nueva solicitud de unirse:\nNombre: {$validatedData['first_name']} {$validatedData['last_name']}\nEmail: {$validatedData['email']}\nDirección: {$validatedData['address']}\nMensaje: {$validatedData['message']}", function($message) use ($validatedData) {
            $message->to('info@toditititas.org')
                    ->subject('Nueva solicitud de unirse');
        });

        if ($request->ajax()) {
            return response()->json(['messagesuscribete' => 'Te has unido con éxito. Pronto nos pondremos en contacto contigo.'], 200);
        }

        // Redireccionar con mensaje de éxito
        return redirect()->back()->with('messagesuscribete', 'Te has unido con éxito. Pronto nos pondremos en contacto contigo.');
    }

    public function contactoinfo(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string',
        ]);

        // Datos del correo para la organización
        $data = [
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'message' => $validatedData['message'],
        ];

        // Enviar el correo electrónico al usuario
        Mail::send('emails.contactoemail', $data, function($message) use ($validatedData) {
            $message->to($validatedData['email'])
                    ->subject('Gracias por contactarnos');
        });

        // Enviar notificación a la organización
        Mail::raw("Nuevo mensaje de contacto:\nNombre: {$validatedData['name']}\nEmail: {$validatedData['email']}\nTeléfono: {$validatedData['phone']}\nMensaje: {$validatedData['message']}", function($message) use ($validatedData) {
            $message->to('info@toditititas.org')
                    ->subject('Nuevo mensaje de contacto');
        });

        if ($request->ajax()) {
            return response()->json(['message' => 'Tu mensaje ha sido enviado con éxito. Pronto nos pondremos en contacto contigo.'], 200);
        }

        // Redireccionar con mensaje de éxito
        return redirect()->back()->with('success', 'Tu mensaje ha sido enviado con éxito. Pronto nos pondremos en contacto contigo.');
    }
}
