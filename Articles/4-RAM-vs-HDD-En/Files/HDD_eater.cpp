#include <iostream>
#include <fstream>
#include <signal.h>
#include <ctime>

using namespace std;

ofstream outfile;

void signalHandler(int signum) {
    outfile.close();
    cout << "Interrupt signal received. File closed." << endl;
    exit(signum);
}

int main() {
    signal(SIGINT, signalHandler);
    srand(time(NULL));
    char character = 'A';
    string filename = to_string(rand()) + ".txt";

    cout << "EATING HDD!!!" << endl;


    while (true) {
        
        outfile.open(filename);
        if (!outfile.is_open()) {
            cout << "Error opening file: " << filename << endl;
            return 1;
        }
        
        for (int i = 0; i < 1073741824; i++) {
            outfile << character;
        }
        
        outfile.close();
    }
    
    return 0;
}
