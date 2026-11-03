<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    public function redirect(Request $request) {
    
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle(Request $request) { 

       
        $google_user = Socialite::driver('google')->user();
        $user = User::where('google_id', $google_user->getId())->first();
    
        if (!$user) { 
            // Create a new user if it doesn't exist
            $new_user = User::create([
                'name' => $google_user->getName(),
                'email' => $google_user->getEmail(),
                'google_id' => $google_user->getId()
            ]);
    
            Auth::login($new_user);

            if(Auth::user()) { 
                $previousUrl = $request->session()->previousUrl();
                $parsedUrl = parse_url($previousUrl, PHP_URL_QUERY);  
                $arrayParams = [];
                parse_str($parsedUrl, $arrayParams);

                if(array_key_exists('plan', $arrayParams)){  
                    $pricePlan = $arrayParams['plan'] ? $arrayParams['plan'] : null;

                    if (!empty($pricePlan)) { 

                        return redirect()->route('checkout', ['plan' => $pricePlan]);
                    } 
                } else { 
                    
                      return redirect()->route('dashboard');
                  }        
            }

            
    
        } else if ($user) { 

            Auth::login($user);
    
            if(Auth::user()) { 
                $previousUrl = $request->session()->previousUrl();
                $parsedUrl = parse_url($previousUrl, PHP_URL_QUERY);  
                $arrayParams = [];
                parse_str($parsedUrl, $arrayParams);
                if(array_key_exists('plan', $arrayParams)){  
                    $pricePlan = $arrayParams['plan'] ? $arrayParams['plan'] : null;
                    
                    if (!empty($pricePlan)) { 

                        return redirect()->route('checkout', ['plan' => $pricePlan]);
                    } 
                } else { 
                    
                      return redirect()->route('dashboard');
                  }
                
            }
            
        } else { 
            // Handle any other scenario (if needed)
            return redirect()->route('login')
                ->with('msg', "Акаунтът ви е регистриран чрез стандартната форма");
        }
    }
}
