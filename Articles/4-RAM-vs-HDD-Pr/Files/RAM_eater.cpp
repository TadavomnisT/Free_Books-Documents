#include <iostream>

using namespace std;

int main() {

    cout << "EATING RAM!!!" << endl;
    while( true )
    {
        char* arr = new char[1073741824];
        for(int i = 0; i < 1073741824 ; i++)
            arr[i] = 'A';
        delete arr;
    }

    return 0;
}
